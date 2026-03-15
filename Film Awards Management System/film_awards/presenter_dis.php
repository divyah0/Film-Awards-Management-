<html>
    <head>
        <title>Presenter</title>
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
    <h2 class="topnav">PRESENTER DETAILS</h2>
        
    <div class="custombutton">   
<form><br />
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px #074fbb;background-color: #074fbb;color:white;font-size:17px;"formaction="presenter.html">Add</button>


</form>
</div>
    <?php
    include 'connect.php';
    
    $pre = "SELECT * FROM PRESENTER";
$result3 = mysqli_query($conn, $pre);

// Display results in an HTML table
if (mysqli_num_rows($result3) > 0) 
{
    echo "<table>
            
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

?>

<div style="margin-top:25px;">
<form action="presenter_query.php" method="post">
    <label style="font-size: 20px;">Enter presenter name to know the award he/she is going to present </label><br />
    <input  id="dbutton" type="text" name="f1" placeholder="Enter presenter name" required>
    <input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px ;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Go">
</form> 
</div>

<form>
<input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px ;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Back" formaction="home.html">
<br />
</form>

</body>
</html>
