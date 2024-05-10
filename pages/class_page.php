<?php
require "../php/connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../log.png" type="image/x-icon">

    <title>E-time</title>
</head>
<body>
    <div class="content">
        <div class="left_content">
            <p>E- <span>Time </span></p>&&nbsp;&nbsp;&nbsp;<span><?php echo $_SESSION['username']?></span>
            
            <menu>
                <ul>
                    <li><a href="./user_page.php">User</a></li>
                    <li><a href="./periods.php">Periods</a></li>
                    <li><a href="./course_page.php">Course</a></li>
                    <li><a href="./class_page.php">Class</a></li>
                    <li><a href="time_table.php">Timetable</a></li>
                </ul>
            </menu>
            <label>Class</label>
            <form action="../php/class.php" method="post">
                <input type="text" name="name" placeholder="Class_name" required>
                <input type="text" name="detail" placeholder="Detail">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
            <table border="1">
                <tr>
                    <th>class_id</th>
                    <th>Class_name</th>
                    <th>Class_detail</th>
                    <th>Actions</th>
                </tr>
                <?php
                  $select=mysqli_query($db,"SELECT DISTINCT `class_id`, `class_name`, `class_detail` FROM `class`");
                   if($select->num_rows>0){
                   while($row= mysqli_fetch_assoc($select)) {
                       ?>
                       <tr>
                           <td> <?=$row['class_id'];?></td>
                           <td> <?=$row['class_name'];?></td>
                           <td> <?=$row['class_detail'];?></td>
                           <td><a href="../update/class.php?class_id=<?=$row['class_id'];?>">Update</a></td>
                           <td><a href="../delete/class.php?class_id=<?=$row['class_id'];?>">Delete</a></td>
                       </tr>
                <?php  }
               
                } ?>
            </table>
        </div>
    </div>
</body>
</html>