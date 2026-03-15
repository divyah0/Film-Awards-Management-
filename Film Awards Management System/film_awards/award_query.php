<html>
    <head>
    <link rel="stylesheet" href="query.css" type="text/css" />
    </head>
    <body>
        <?php
        include 'connect.php';

        $award=$_POST["f1"];

        $sql = "Select Presenter_name,Pnumber
From Presenter p where p.Award_ID in(Select a.Award_ID From Award a where a.Award_name='$award')";
        $result = $conn->query($sql);

// Output the result
if (mysqli_num_rows($result) > 0) 
{
    echo "<br />
        <table>
            <caption><b>$award Presenter details</b></caption>
            <tr>
                <th>Presenter_name</th>
                <th>Pnumber</th>
            </tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["Presenter_name"] . "</td><td>" . $row["Pnumber"] . "</td></tr>";
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