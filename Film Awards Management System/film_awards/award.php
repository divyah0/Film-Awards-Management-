<html>
    <body>
        <?php
        include 'connect.php';
        $userid=$_POST['Award_ID'];
        $user=$_POST['Award_name'];
        $nick=$_POST['NominationID'];
        
        $uconn = $conn->prepare("insert into award(Award_ID,Award_name,NominationID)
        values(?, ?, ?)");
        $uconn->bind_param("ssi", $userid, $user, $nick );
        $uconn->execute();
        echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
        $uconn->close();
        $conn->close();
        echo '<a href="award_dis.php">Click here to get back</a>';
        ?>
    </body>
</html>