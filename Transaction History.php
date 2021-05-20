
<?php 
  
// Username is root 
$user = 'root'; 
$password = '';  
  
// Database name is gfg 
$database = 'bank';  
  
// Server is localhost with 
// port number 3308 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  
// Checking for connections 
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
// SQL query to select data from database 
$sql = "SELECT * FROM transaction_history"; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
     
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #000000; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #ADD8E6; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
 <style>
body {
  background-image: url('transhisbg.jpg');
}
</style> 
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head> 
  
<body> 
<ul>
  <li><a class="active" href="Home.html">
       <div class="logo-image">
            <img src="homelogo.jpg" height="22"  class="img-fluid">
      </div>

</a></li>
  <li><a href="New Transaction.php">View Users</a></li>
  <li><a href="Transaction History.php">Transaction History</a></li>
  <li><a href="About us.html">About Us</a></li>
</ul>
    <section> 
        <h1><u> Transaction History</u></h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>Sno</th> 
                <th>Sender</th> 
                <th>Receiver</th>
                <th>Amount</th> 
             
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['sno'];?></td> 
                <td><?php echo $rows['Sender'];?></td> 
                <td><?php echo $rows['Receiver'];?></td>
                <td><?php echo $rows['Amount'];?></td> 
               
              
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 