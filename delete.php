<?php
include './db.php';

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = intval($_POST['id']);

    //Getting the img
    $result = $conn->query("SELECT image_path FROM photos WHERE id = $id");


    //check if a photo found
    if($result->num_rows >0){
        $row = $result->fetch_assoc();
        unlink($row['image_path']);

    }

    
    //Delete from db
    $conn->query("DELETE FROM photos WHERE id = $id");


    //Redirect to the index.php
    header('Location: index.php');

    exit;
}

?>