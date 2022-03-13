
<html>
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
 <body>
  <div class="center">
        <h1>SIGN IN</h1>
        <p>
            Don't Have an Account? <a href ="signup.php">Sign Up!</a> 
        </p>
    <form action="server.php" method="post">
      <div class="inputbox">
        <input type="text" name="email" required="required">
        <span>Email</span>
      </div>
      <div class="inputbox">
        <input type="text" name="password" required="required">
        <span>Password</span>
      </div>
      <div class="inputbox">
         <input type="submit" name="login_user" value="submit">
      </div>

    </form>
   </div> 
 </body>
</html>

