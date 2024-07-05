<?php
require_once "../layouts/config.php";

if (isset($_POST['uploadcsv'])) {
    $fileMimes = array(
        'text/csv',
        'application/csv',
        'application/vnd.ms-excel',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'text/plain'
    );

    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {
        $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
        fgetcsv($csvFile, 0, ","); // Skip the header row

        $stmt = $link->prepare("INSERT INTO `instagram_influnces`(`username`, `fullname`, `ig_link`, `country`, `city`, `languages`, `biography`, `follower_count`, `following_count`, `media_count`, `category`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        while (($getData = fgetcsv($csvFile, 488881, ",")) !== FALSE) {
            $stmt->bind_param("sssssssiiii", $username, $fullname, $ig_link, $country, $city, $languages, $biography, $follower_count, $following_count, $media_count, $category);

            // Assign variables from CSV data
            $username = $getData[0];
            $fullname = $getData[1];
            $ig_link = $getData[2];
            $country = $getData[3];
            $city = $getData[4];
            $languages = $getData[5];
            $biography = $getData[6];
            $follower_count = $getData[7];
            $following_count = $getData[8];
            $media_count = $getData[9];
            $category = $getData[10];

            $stmt->execute();
        }

        fclose($csvFile);

        $insertedRows = $stmt->affected_rows;

        if ($insertedRows > 0) {
            header("location:../data.php");
            exit();
        } else {
            echo "No data inserted or an error occurred.";
        }
    } else {
        echo "Please select a valid file";
    }
}
?>
