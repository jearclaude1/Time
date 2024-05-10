<?php
require "./connection.php";
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $detail=$_POST['detail'];
    $query=mysqli_query($db,"INSERT INTO `class`(`class_name`, `class_detail`) VALUES ('$name','$detail');");
    if ($query ==TRUE) {
        echo "<script>alert('well done !....')</script>";
        header('location:../pages/class_page.php');
        exit();
    }
}
?>