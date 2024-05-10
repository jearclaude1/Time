<?php
require "../php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>E-time</title>
</head>
<body>
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
            <label>User</label>
            <form action="../php/user.php" method="post">
                <input type="text" name="name" placeholder="User_name">
                <input type="text" name="telephone" placeholder="Telephone">
                <input type="text" name="stutus" placeholder="stutus">
                <input type="text" name="role" placeholder="Role">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
        <table border="1">
                <tr>
                    <th>Number</th>
                    <th>user_name</th>
                    <th>telephone</th>
                    <th>stutus</th>
                    <th>role</th>
                    <th>Action</th>
                </tr>
                <?php
                  $select=mysqli_query($db,"SELECT `user_id`, `user_name`, `telephone`, `stutus`, `role` FROM `user`");
                   if($select){
                    $number= 1;
                    $sum;
                    while ($row = $select->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?=$sum = $number++; ?></td>
                           <td> <?=$row['user_name'];?></td>
                           <td> <?=$row['telephone'];?></td>
                           <td> <?=$row['stutus'];?></td>
                           <td> <?=$row['role'];?></td>
                           <td><a href="../update/user.php?class_id=<?=$row['user_id'];?>">Update</a></td>
                           <td><a href="../delete/user.php?class_id=<?=$row['user_id'];?>">Delete</a></td>
                       </tr>
                <?php  }
               
                } ?>
            </table>
        </div>
    </div>
</body>
</html>