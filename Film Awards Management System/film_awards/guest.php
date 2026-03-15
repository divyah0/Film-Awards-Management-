<html>
    <body>
        <?php
        include 'connect.php';
        $userid=$_POST['Guest_ID'];
        $user=$_POST['Guest_name'];
        $pass=$_POST['GPnumber'];
        
        $uconn = $conn->prepare("insert into Guest(Guest_ID,Guest_name,GPnumber)
        values(?, ?, ?)");
        $uconn->bind_param("isi", $userid, $user, $pass );
        $uconn->execute();
        echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
        $uconn->close();
        $conn->close();
        echo '<a href="guest_dis.php">Click here to get back</a>';
        ?>
    </body>
</html>