<html>
    <head>
        <title>Awards</title>
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
    <h2 class="topnav">AWARDS DETAILS</h2>
        
    <div class="custombutton">   
<form><br />
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px #074fbb ;background-color: #074fbb;color:white;font-size:17px;"formaction="award.html">Add</button>


</form>
</div>
    <?php
    include 'connect.php';
    
    $award = "SELECT * FROM AWARD";
    $result2 = mysqli_query($conn, $award);

// Display results in an HTML table
if (mysqli_num_rows($result2) > 0) 
{
    echo "<table>
            
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

?>

<div style="margin-top:25px;">
<form action="award_query.php" method="post">
    <label style="font-size: 20px;">Enter award name to know the presenter </label><br />
    <input  id="dbutton" type="text" name="f1" placeholder="Enter award name" required>
    <input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px #074fbb ;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Go">
<br /><br />
</form> 

<form action="awardees.php" method="post">
<label style="font-size: 20px;">Enter film name to know awards received by that film</label><br />
    <input  id="dbutton" type="text" name="f1" placeholder="Enter film name" required>
    <input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px #074fbb;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Go">
<br />
</form> 
</div>

<form>
<input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px #074fbb ;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Back" formaction="home.html">
<br />
</form>

</body>
</html>
