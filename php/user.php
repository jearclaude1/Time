<?php
require "./connection.php";
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $telephone=$_POST['telephone'];
    $stutus = $_POST['stutus'];
    $role=$_POST['role'];
    $query=mysqli_query($db,"INSERT INTO `user`(`user_name`, `telephone`, `stutus`, `role`) VALUES ('$name','$telephone','$stutus','$role');");
    if ($query ==TRUE) {
        echo "<script>alert('well done !....')</script>";
        header('location:../pages/user_page.php');
        exit();
    }
}
?>