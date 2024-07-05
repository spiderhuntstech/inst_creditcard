<?php
require_once "../layouts/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $useremail = $_POST["email"];
    $id = $_POST['status_id'];
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 2) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($useremail_err) && empty($password_err)) {

        // Prepare an insert statement
        $sql = "UPDATE `users` SET useremail=?, username=?, password=?, token=?, role=? WHERE `id`=?";

        $stmt = $link->prepare($sql);

        if ($stmt) {
            $param_useremail = $useremail;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_token = bin2hex(random_bytes(50)); // generate unique token
            
            // Define role as a variable and pass it by reference
            $role = 0;
            $stmt->bind_param("ssssii", $useremail, $username, $param_password, $param_token, $role, $id);
            
            if ($stmt->execute()) {
                header("Location: ../index.php");
                exit();
            } else {
                echo "Failed to update data. Please try again.";
            }

            $stmt->close();
        } else {
            echo "Failed to prepare the statement. Please try again.";
        }
    }
}
?>
