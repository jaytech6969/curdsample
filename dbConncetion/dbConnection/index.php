<?php

    include_once("dbConnection/mysqlconfig_connection.php");

    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SampleCRUD</title>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="forms/addform.php">Add Subjects</a><br/><br/>
    <table width='100%' border= 1>
        <tr bgcolor='#CCCCCC'>
            <td>ID</td>
            <td>Subject Code</td>
            <tb>Subject Name</tb>
            <tb>Action</tb>

        </tr>
        <?php
            while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['subject_id']."</td>";
                echo "<td>".$res['Subject_code']."</td>";
                echo "<td>".$res['Subject_name']."</td>";
                echo "<td><a href=\"form/editform.php?id=$res[subject_id]\">Edit</a>|
                        <a href=\"functions/delete.php?id=$res[subject_id]\"
                        onclick=\"return confirm('Are you sure you want to delete this?')\">Delete</a></td></tr>";
            }
        ?>
    </table>
</body>
</html> 



