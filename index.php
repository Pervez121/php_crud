<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        // connection
        $conn = mysqli_connect("localhost", "root", "", "php_crud") or die("connection Failed");

        //run query

        $sql = "SELECT * FROM student JOIN student_class WHERE student.s_class = student_class.class_id";
        $result = mysqli_query($conn, $sql) or die("Query Unsucessfull");

        if(mysqli_num_rows($result) > 0 ){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

            <?php

            while($row = mysqli_fetch_assoc($result)){
        
            ?>

            <tr>
                <td><?php echo $row['s_id']?></td>
                <td><?php echo $row['s_name']?></td>
                <td><?php echo $row['s_address']?></td>
                <td><?php echo $row['class_name']?></td>
                <td><?php echo $row['s_phone']?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr> 

            <?php
            }
            ?>

        </tbody>
    </table>
    <?php
    }

    else{
        echo "No records found";
    }

    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
