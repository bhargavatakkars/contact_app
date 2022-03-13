<?php
session_start();

// initializing variables

$email    = "";
$secretcode = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'contactDB');

// REGISTER USER
if (isset($_POST['add'])) {
  // receive all input values from the form
  
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $name =  $_POST['name'];
  $uemail=$_SESSION['email'];


  	$query = "INSERT INTO mycontacts (uemail, contact_name,contact_number,contact_email) VALUES('$uemail','$name' ,'$phone', '$email')";
  	mysqli_query($db, $query);
  	header('location: index.php');
  }



?>
