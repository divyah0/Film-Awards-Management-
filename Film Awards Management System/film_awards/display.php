<html>
    <head>
<style>

table, th, td {
  border: 1px solid;
}

table {
  border-collapse: collapse;
  width: 80%;
}

td {
  text-align: center;
}

th {
  background-color: #074fbb;
  color: white;
}

body {
background-color: #DBF9FC;
}

caption{
    font-size: 20px;
}
</style>
</head>
<body>
        <?php
include 'connect.php';

// Retrieve data from Nomination table
$sql = "SELECT * FROM Nomination";
$result = mysqli_query($conn, $sql);

// Display results in an HTML table
if (mysqli_num_rows($result) > 0) 
{
    echo "<table>
            <caption><b>Nomination details</b></caption>
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




$event = "SELECT * FROM EVENTS";
$result1 = mysqli_query($conn, $event);

// Display results in an HTML table
if (mysqli_num_rows($result1) > 0) 
{
    echo "<table>
            <caption><b>Events details</b></caption>
            <tr>
                <th>EventID</th>
                <th>EventName</th>
                <th>EventSlot</th>
                <th>EventManager</th>
            </tr>";
                while($row = mysqli_fetch_assoc($result1)) {
                    echo "<tr><td>" . $row["EventID"] . "</td><td>" . $row["EventName"] . "</td><td>" . $row["EventSlot"] . "</td><td>" . $row["EventManager"] . "</td></tr>";
    }
    echo "</table><br /><br /><br />";
} 
else 
{
    echo "0 results";
}



$award = "SELECT * FROM AWARD";
$result2 = mysqli_query($conn, $award);

// Display results in an HTML table
if (mysqli_num_rows($result2) > 0) 
{
    echo "<table>
            <caption><b>Award details</b></caption>
            <tr>
                <th>Award_ID</th>
                <th>Award_name</th>
                <th>NominationID</th>
            </tr>";
                while($row = mysqli_fetch_assoc($result2)) {
                    echo "<tr><td>" . $row["Award_ID"] . "</td><td>" . $row["Award_name"] . "</td><td>" . $row["NominationID"] . "</td></tr>";
    }
    echo "</table><br /><br /><br />";
} 
else 
{
    echo "0 results";
}


$pre = "SELECT * FROM PRESENTER";
$result3 = mysqli_query($conn, $pre);

// Display results in an HTML table
if (mysqli_num_rows($result3) > 0) 
{
    echo "<table>
            <caption><b>Presenter details</b></caption>
            <tr>
                <th>Presenter_ID</th>
                <th>Presenter_name</th>
                <th>Pnumber</th>
                <th>Award_ID</th>
            </tr>";
                while($row = mysqli_fetch_assoc($result3)) {
                    echo "<tr><td>" . $row["Presenter_ID"] . "</td><td>" . $row["Presenter_name"] . "</td><td>" . $row["Pnumber"] . "</td><td>" . $row["Award_ID"] . "</td></tr>";
    }
    echo "</table><br /><br /><br />";
} 
else 
{
    echo "0 results";
}


$guest = "SELECT * FROM GUEST";
$result4 = mysqli_query($conn, $guest);

// Display results in an HTML table
if (mysqli_num_rows($result4) > 0) 
{
    echo "<table>
            <caption><b>Guest details</b></caption>
            <tr>
                <th>Guest_ID</th>
                <th>Guest_name</th>
                <th>GPnumber</th>
            </tr>";
                while($row = mysqli_fetch_assoc($result4)) {
                    echo "<tr><td>" . $row["Guest_ID"] . "</td><td>" . $row["Guest_name"] . "</td><td>" . $row["GPnumber"] . "</td></tr>";
    }
    echo "</table><br /><br /><br />";
} 
else 
{
    echo "0 results";
}
// Close database connection
mysqli_close($conn);
?>

</body>
</html>
