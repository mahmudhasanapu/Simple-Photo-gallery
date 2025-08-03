<?php
include './db.php';

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $title = $_POST['title'];
    $image = $_FILES['image'];

    //check img uploaded
    if(isset($image) && $image['tmp_name'] !== ""){
        $uploadDir = 'uploads/';
        $filepath = $uploadDir . basename($image['name']);

        //upload the file
        if(move_uploaded_file($image['tmp_name'], $filepath)){
            //insert he file path into db
            $conn->query("INSERT INTO photos(title, image_path) VALUES('$title', '$filepath')");
            header('Location: index.php');
            exit;    
        }else{
            echo "File upload failed";
        }


    }else{
        echo "please select a file";
    }

}

?>