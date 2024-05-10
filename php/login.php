<?php
require "./connection.php";
session_start();
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
// Assuming $db is your database connection
$query = mysqli_query($db, "SELECT * FROM client WHERE name='$name' AND password='$password' ");
$row = mysqli_fetch_assoc($query);
$_SESSION['type'] = $row['type']; 
$_SESSION['username']=$row['name'];

if ($row == TRUE) 
{

    if ($_SESSION['type'] =='admin') 
    {
        echo "<script>alert('Well done!')</script>";
        header('location:../pages/course_page.php');
        exit;
    } 
    else 
    {
        echo "<script>alert('Well done!')</script>";
        header('location:../View/view.php');
        exit;
    }
}
 else {
    echo "<script>alert('Invalid username or password!')</script>";
    header('location:../Client/login.php');
    exit;
}
}
?>