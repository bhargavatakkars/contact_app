<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>

    <div >
        <h1> SIGN UP </h1>
        <p> 
            Already have an account? <a href ="signin.php"> Sign in </a> 
        </p>
      
			<div class="signup">
				<form action="server.php" method="post">
                    <div class="inputbox">
					           <input type="email" name="email" placeholder="Email" required="">
                    </div>
                    <div class ="inputbox">
                      <input type="password" name="password" placeholder="Password" required="">
                    </div> 
                    <div class="inputbox">
                      <input type="text" name="secretcode" placeholder="Secret code" required="">
                    </div>
                   <div class="inputbox">
                     <input type="submit"  name="reg_user" value="submit">
                   </div>
				</form>

      
			</div>
	</div>
</body>
</html>
