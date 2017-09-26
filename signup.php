<?php
   include_once 'header.php';
?>

  <section class="mainContainer">
    <div class="mainWrapper">
      <h2>Sign Up</h2>
      <form class="signupForm" action="includes/signup.inc.php" method="POST">
       <input type="text"     name="first" placeholder="Firstname" />
       <input type="text"     name="last"  placeholder="Lastname" />
       <input type="text"     name="email" placeholder="Email" />
       <input type="text"     name="uid"   placeholder="Username" />
       <input type="password" name="pwd" placeholder="password" />
       <button type="submit" name="submit">Sign Up</button>
      </form>	
</div>
  </section>
  
</body>

<?php
   include_once 'footer.php';
?>


