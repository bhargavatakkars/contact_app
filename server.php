<?php
session_start();

// initializing variables

$email    = "";
$secretcode = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'contactDB');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $secretcode = mysqli_real_escape_string($db, $_POST['secretcode']);


  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE emailId='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['emailId'] === $email) {
      array_push($errors, "email already exists");
      header('location: signin.php');
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (emailId, password,secretcode) VALUES( '$email', '$password','$secretcode')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}





if (isset($_POST['login_user'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = md5($password);
  	$query = "SELECT * FROM users WHERE emailId='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}
  	else
  	{
  	    echo "<script type='text/javascript'>alert('Email or password is invalid.');</script>";
  	    header('location: signin.php');
  	}
}

?>

