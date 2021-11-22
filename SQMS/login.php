<!DOCTYPE html>
<html>
<head>
	<title>LOGIN | SQMS </title>
	<link rel="shorcut icon" type="image" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0">
</head>
<body>
     <form action="login-check.php" method="post">

          <div class="login">
               <div class="logo">
          <a href="index.php"><img src="img/logo.png"></a>
     
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     <div class="input-group">    
     	<input type="text" name="uname" placeholder="User Name"  autocomplete="off"><br>
     </div>

     <div class="input-group">
     	<input type="password" name="password" placeholder="Password" autocomplete="off"><br>
     </div>
     	<button type="submit" class="button">LOGIN</button>
          <br>
          <div>

          <a href="#" id="pass">Forgot Password</a>|<a href="signup.php" id="sign">SIGNUP</a>
     </div>
          
     </form>
      <div class="animation-area">
          <ul class="box-area">
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
          </ul>
     </div>
</body>
</html>