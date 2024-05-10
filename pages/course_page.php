<?php
require "../php/connection.php";
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
<a href="../index.html">Back</a> 
    <div class="content">
        <div class="left_content">
            <p>E- <span>Time </span></p>
            <menu>
                <ul>
                    <li><a href="./user_page.php">User</a></li>
                    <li><a href="./periods.php">Periods</a></li>
                    <li><a href="./course_page.php">Course</a></li>
                    <li><a href="./class_page.php">Class</a></li>
                    <li><a href="time_table.php">Timetable</a></li>
                </ul>
            </menu>
            <label>Course</label>
            <form action="../php/course.php" method="post">
                <input type="text" name="name" placeholder="Course_name">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
            <table border="1">
                <tr>
                    <th>Course_id</th>
                    <th>Course_name</th>
                    <th>Action</th>
                </tr>
                <?php
                  $select=mysqli_query($db,"SELECT DISTINCT * FROM `course`;");
                   if($select->num_rows>0){
                   while($row= mysqli_fetch_assoc($select)) {
                       ?>
                       <tr>
                           <td> <?=$row['course_id'];?></td>
                           <td> <?=$row['course_name'];?></td>
                           <td><a href="../update/course.php?class_id=<?=$row['course_id'];?>">Update</a></td>
                           <td><a href="../delete/course.php?class_id=<?=$row['course_id'];?>">Delete</a></td>
                       </tr>
                <?php  }
               
                } ?>
            </table>
        </div>
    </div>
</body>
</html>