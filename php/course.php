<?php
require "./connection.php";
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $query=mysqli_query($db,"INSERT INTO `course`(`course_name`) VALUES ('$name');");
    if ($query ==TRUE) {
        echo "<script>alert('well done !....')</script>";
        header('location:../pages/course_page.php');
        exit();
    }
}
?>