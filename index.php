<?php
require 'header.php' ?>
<main>
  <div class="leftPanel">
    <h4>Signup</h4>
    <form action="includes/signup.inc.php" method="post" name=signupSheet>
      <input type="text" name="uname" placeholder="New Username">
      <input type="password" name="passwd" placeholder="New Password">
      <input type="submit" value="Sign Up">
    </form>
  </div>
</main>
<?php require 'footer.php' ?>
