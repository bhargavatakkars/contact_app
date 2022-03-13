<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signin.php');
  }
  if (isset($_GET['email'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: signin.php");
  }
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css"> 
        <style>
            td,th
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class ="center">

            <form action ="add.php" method="post">
               <h3>Add Contacts</h3>
               <div class ="inputbox">
                   <input type="text" name="name" placeholder="Name">
                </div> 
                <div class="inputbox">
                    <input type="text"  name="phone" placeholder="Phone No">
                </div>
                <div class ="inputbox">
                    <input type="Email"  name="email" placeholder="Email">
                </div>
                <div class="inputbox">
                     <input type="submit" name="add" value="save">
                </div>

            </form>
        </div>
        
<?php
$db = mysqli_connect('localhost', 'bhargava_ecet201', '9849838324@t', 'bhargava_ecet2018');
$uemail=$_SESSION['email'];
$sql = "SELECT * from mycontacts where uemail='$uemail'";
$result = $db->query($sql); 


?>

        <div class ="center">

            
               <h3>My contacts</h3>

<table style="border: 1px solid black;">
    <tr>
        <th>
            Name
        </th>
        <th>
            Phone Number
        </th>
        <th>
            Email
        </th>
        
    </tr>
    
    <?php
    if ($result->num_rows > 0) {
    
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
      
    echo "<tr><td> " . $row["contact_name"]. "</td><td> " . $row["contact_number"]. "</td><td> " . $row["contact_email"]. "</td></tr>";
  }
} 
    ?>
    
    
    
</table>
     <?php ?>      
        </div>
        
        
        
    </body>
</html>
