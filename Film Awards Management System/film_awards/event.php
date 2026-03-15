<html>
    <body>
        <?php
        include 'connect.php';
        $userid=$_POST['EventID'];
        $user=$_POST['EventName'];
        $nick=$_POST['EventSlot'];
        $mname=$_POST['EventManager'];
        $uconn = $conn->prepare("insert into Events(EventID,EventName,EventSlot,EventManager)
        values(?, ?, ?, ?)");
        $uconn->bind_param("isss",$userid, $user, $nick, $mname);
        $uconn->execute();
        echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
        $uconn->close();
        $conn->close();
        echo '<a href="event_dis.php">Click here to get back</a>';
        ?>
    </body>
</html>