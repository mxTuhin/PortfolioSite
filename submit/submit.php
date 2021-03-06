<?php
include('../config/dbConfig.php');

if(isset($_POST['submit'])) {
    $project_name = $_POST['project_name'];
    $catch_line=$_POST['catch_line'];
    $category=$_POST['category'];


    $hex_string = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $image_id="";
    for($i=0; $i<6; $i++) {
        $image_id  .= $hex_string{rand(0,strlen($hex_string)-1)};
    }


    $target_dir = "../assets/images/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $new_file = $target_dir . $image_id . "." . $imageFileType;

    $file_name = $image_id . "." . $imageFileType;
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            // echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["img"]["size"] > 50000000) {
        // echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $new_file)) {

            $sql="INSERT INTO portfolio (id, project_name, catch_line, category, img) VALUES (NULL, '$project_name', '$catch_line', '$category', '$file_name')";
            mysqli_query($db, $sql);

        } else {
            // echo "Sorry, there was an error uploading your file.";
            // 	echo "not Uploaded";
        }
    }
}


?>