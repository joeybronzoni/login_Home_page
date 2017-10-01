<?php
session_start();
?>

<!DOCTYPE html>

<head>
  <title>PHP Login</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>
<body>

  <header>
    <nav>
      <div class="mainWrapper">
	<ul>
	  <li><a href="login.php">Home</a></li>
	</ul>
	<div class="navLogin">
      <?php
      if (isset($_SESSION['u_id'])) {
             echo '<form action="includes/logout.inc.php" method="POST">
                 <button type="submit" name="submit">Logout</button>
                 </form>';
      }else{
          echo '<form action="includes/login.inc.php" method="POST">
             <input  type="text"     name="uid" placeholder="Username/e-mail" />
	    <input  type="password" name="pwd" placeholder="password" />
	    <button type="submit"   name="submit">Login</button>
	    <a id="signUpTag" href="signup.php">Sign Up</a>
	  </form> ';
      }

      ?>
	</div>
      </div>
    </nav>
  </header>
