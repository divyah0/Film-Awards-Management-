<html>
    <body>
        <?php
        include 'connect.php';
        $userid=$_POST['NominationID'];
        $user=$_POST['Nominee'];
        $pass=$_POST['Category'];
        $nick=$_POST['Filmname'];
        $uconn = $conn->prepare("insert into Nomination(NominationID,Nominee,Category,FilmName)
        values(?, ?, ?, ?)");
        $uconn->bind_param("isss", $userid, $user, $pass, $nick );
        $uconn->execute();
        echo '<script type="text/JavaScript"> 
        alert("ADDED SUCCESSFULLY");
        </script>';
        $uconn->close();
        $conn->close();
        echo '<a href="nom_dis.php">Click here to get back</a>';
        ?>
    </body>
</html>