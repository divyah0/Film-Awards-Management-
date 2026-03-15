<html>
    <head>
    <link rel="stylesheet" href="query.css" type="text/css" />
    </head>
    <body>
        <?php
        include 'connect.php';

        $film=$_POST["f1"];

        $sql = "SELECT * FROM Nomination WHERE FilmName = '$film'";
        $result = $conn->query($sql);

// Output the result
if (mysqli_num_rows($result) > 0) 
{
    echo "<br />
        <table>
        <caption><b>$film Nomination details</b></caption>
             <tr>
                <th>Nomination ID</th>
                <th>Nominee</th>
                <th>Category</th>
                <th>Film Name</th>
            </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["NominationID"] . "</td><td>" . $row["Nominee"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["FilmName"] . "</td></tr>";
    }
    echo "</table><br /><br /><br />";
} 
else 
{
    echo "0 results";
}
    
$conn->close();
?>
<form>
    <button type="submit"  style="  height: 30px;width: 90px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;"formaction="nom_dis.php">Back</button>
</form>
<body>
<html>