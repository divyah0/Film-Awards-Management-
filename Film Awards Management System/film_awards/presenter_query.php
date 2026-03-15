<html>
    <head>
    <link rel="stylesheet" href="query.css" type="text/css" />
    </head>
    <body>
        <?php
        include 'connect.php';

        $presenter=$_POST["f1"];

        $sql = "Select award_name
        From Award
        Where Award_ID in (Select Award_ID From Presenter where Presenter_name ='$presenter')";
        $result = $conn->query($sql);

// Output the result
if (mysqli_num_rows($result) > 0) 
{
    echo "<br />
        <table>
            
            <tr>
                <th>award_name</th>
            </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["award_name"] . "</td></tr>";
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
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;"formaction="presenter_dis.php">Back</button>
</form>
</body>
</html>