<?php
require_once "../layouts/config.php";
$query = "DELETE FROM `instagram_influnces`";

$stmt = $link->prepare($query);
if ($stmt->execute()) {
    echo 1;
    exit();
} else {
    echo 0;
}
?>