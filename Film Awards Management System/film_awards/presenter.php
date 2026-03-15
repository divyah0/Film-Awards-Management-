<html>
    <body>
        <?php
        include 'connect.php';
        $userid=$_POST['Presenter_ID'];
        $user=$_POST['Presenter_name'];
        $pass=$_POST['Pnumber'];
        $nick=$_POST['Award_ID'];
        
        $uconn = $conn->prepare("insert into Presenter(Presenter_ID,Presenter_name,Pnumber,Award_ID)
        values(?, ?, ?, ?)");
        $uconn->bind_param("isis", $userid, $user, $pass, $nick);
        $uconn->execute();
        echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
        $uconn->close();
        $conn->close();
        echo '<a href="presenter_dis.php">Click here to get back</a>';
        ?>
    </body>
</html>