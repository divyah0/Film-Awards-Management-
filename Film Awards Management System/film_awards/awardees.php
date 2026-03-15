<html>
    <head>
    <link rel="stylesheet" href="query.css" type="text/css" />
    </head>
    <body>
        <?php
        include 'connect.php';

        $film=$_POST["f1"];

        $sql = "Select A.Award_ID, A.Award_name
        From Award A
        Where A.NominationID in ( Select B.NominationID
        From Nomination B
        Where A.NominationID = B.NominationID and B.FilmName='$film')";
        $result = $conn->query($sql);

// Output the result
if (mysqli_num_rows($result) > 0) 
{
    echo "<br />
        <table>
            <caption><b>$film award details</b></caption>
            <tr>
                <th>Award_ID</th>
                <th>Award_name</th>
                
            </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["Award_ID"] . "</td><td>" . $row["Award_name"] ."</td></tr>";
    }
    echo "</table><br /><br />";
} 
else 
{
    echo "0 results";
}
    
$conn->close();
?>
<form>
    <button type="submit"  style="  height: 30px;width: 90px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;"formaction="award_dis.php">Back</button>
</form>
<body>
<html>