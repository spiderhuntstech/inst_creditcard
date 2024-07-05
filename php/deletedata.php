<?php
require_once "../layouts/config.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "DELETE FROM `instagram_influnces` WHERE `id`=$id";

$stmt = $link->prepare($query);
if ($stmt->execute()) {
    header("Location: ../data.php");
    exit();
} else {
    echo "Record is not deleted";
}
}else{
    echo "Please pick id to delete record";
}
?>