<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
<h2>Coffee Club Login</h2>
<form action="validateMember.php" method="post">
  Email:<br>
  <input type="text" name="email"><br>
  <input type="submit">
</form>
</div>




<?php include(SHARED_PATH . '/footer.php'); ?>