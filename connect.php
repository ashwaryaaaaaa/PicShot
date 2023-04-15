<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $image_desc = $_POST['image_desc'];
   $image_price = $_POST['image_price'];
   $image_file = $_POST['image_file'];

   //database connection

   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into contribute (id, name, email, image_desc, image_price, image_file)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("isssss",$id, $name, $email, $image_desc, $image_price, $image_file);
    $stmt->execute();
    echo "Image contributed";
    $stmt->close();
    $conn->close();
   }

?>
