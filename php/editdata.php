<?php
require_once "../layouts/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uploaddata'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $ig_link = $_POST['ig_link'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $languages = $_POST['languages'];
    $biography = $_POST['biography'];
    $follower_count = $_POST['follower_count'];
    $following_count = $_POST['following_count'];
    $media_count = $_POST['media_count'];
    $category = $_POST['category'];

    // Prepare and execute the SQL statement
    $sql = "UPDATE `instagram_influnces` SET `username`=?, `fullname`=?, `ig_link`=?, `country`=?, `city`=?, `languages`=?, `biography`=?, `follower_count`=?, `following_count`=?, `media_count`=?, `category`=? WHERE `id`=?";
    
    $stmt = $link->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sssssssiissi", $username, $fullname, $ig_link, $country, $city, $languages, $biography, $follower_count, $following_count, $media_count, $category, $id);
        
        if ($stmt->execute()) {
            header("Location: ../data.php");
            exit();
        } else {
            echo "Failed to update data. Please try again.";
        }

        $stmt->close();
    } else {
        echo "Failed to prepare the statement. Please try again.";
    }
} else {
    echo "Form submission error.";
}
?>
