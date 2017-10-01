<?php
   include_once 'header.php';
?>

  <section class="mainContainer">
    <div class="mainWrapper">
      <h2>Home</h2>
       <?php
       if (isset($_SESSION['u_id'])) {
           echo 'You are Loggded In!';
          }
       ?>
    </div>
  </section>
  
</body>

<?php
   include_once 'footer.php';
?>

</body>
</html>
