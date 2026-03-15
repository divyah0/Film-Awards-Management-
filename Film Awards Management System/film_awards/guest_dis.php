<html>
    <head>
        <title>Guests</title>
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
    <h2 class="topnav">GUESTS DETAILS</h2>
        
    <div class="custombutton">   
<form><br />
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px #074fbb;background-color: #074fbb;color:white;font-size:17px;"formaction="guest.html">Add</button>


</form>
</div>
    <?php

    include 'connect.php';
    $guest = "SELECT * FROM GUEST";
    $result4 = mysqli_query($conn, $guest);
    
    // Display results in an HTML table
    if (mysqli_num_rows($result4) > 0) 
    {
        echo "<table>
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

?>
 <form>
<input  style="width:55px;height:25px;cursor:pointer;border-radius:15px;
border: 3px ;background-color:#074fbb ;color:#f2f2f2;font-size:17px;"type="submit" value="Back" formaction="home.html">
<br />
</form>


</body>
</html>