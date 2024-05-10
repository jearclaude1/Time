<?php
require "./connection.php";
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $detail =$_POST['detail'];
    $type='user';
    $query=mysqli_query($db,"INSERT INTO `client`(`id`, `name`, `type`, `detail`, `password`)
     VALUES ('','$name','$type','$detail','$password')");
    if ($query ==TRUE) {
        echo "<script>alert('well done !....')</script>";
        header('location:../pages/course_page.php');
        exit();
    }
}
?>