<html>
    <head>
        <title>Events</title>
            <style>
                .custombutton{
                   margin:25px;
                }

                h2{
                    text-align: center;
                    color: white;
                }

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

                table {
                    margin:5px ;
                    width:100%;
                }

                .topnav {
                    overflow: hidden;
                    background-color: #074fbb;
                    height: 70px;
                    border: 3px #074fbb;
                }
                

            </style>
    </head>
    <body>
    <h2 class="topnav">EVENT DETAILS</h2>
        
    <div class="custombutton">   
<form><br />
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px #074fbb;background-color: #074fbb;color:white;font-size:17px;"formaction="event.html">Add</button>


</form>
</div>
    <?php
    include 'connect.php';
    
    $event = "SELECT * FROM EVENTS";
$result1 = mysqli_query($conn, $event);

// Display results in an HTML table
if (mysqli_num_rows($result1) > 0) 
{
    echo "<table>
            
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
?>
<div style="margin-top:25px;">
<form action="event_query.php" method="post">
    <label style="font-size: 20px;">Enter event name to know the slot</label><br />
    <input  id="dbutton" type="text" name="f1" placeholder="Enter event name" required>
    <input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px ;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Go">
<br />
</form> 
</div>
<form>
<input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px ;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Back" formaction="home.html">
<br />
</form>


</body>
</html>
