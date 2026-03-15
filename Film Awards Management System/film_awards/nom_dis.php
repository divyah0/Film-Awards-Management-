<html>
    <head>
        <title>Nomination </title>
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

                input[type=text] {
                    width: 15%;
                    padding: 12px 20px;
                    margin: 8px ;
                    background:transparent;
                    border: 2px solid red;
                    color:#f2f2f2
                }
                

            </style>
    </head>
    <body>
    <h2 class="topnav">NOMINATION DETAILS</h2>
        
    <div class="custombutton">   
<form><br />
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px #074fbb;background-color: #074fbb;color:white;font-size:17px;"formaction="nom.html">Add</button>


</form>
</div>
    <?php
    include 'connect.php';
    //genre
    $query=" select * from Nomination "; 
    $result=mysqli_query($conn,$query); 
    
if (mysqli_num_rows($result) > 0) 
{
    echo "<table>
            
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

?>

<div style="margin-top:25px;">
<form action="nom_query.php" method="post">
    <label style="font-size: 20px;">Enter the filmname to know nominations details</label><br />
    <input  id="dbutton" type="text" name="f1" placeholder="Enter filmname" required>
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
