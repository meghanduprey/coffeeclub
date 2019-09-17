<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/header.php'); ?>
<?php
$members = [
  ['id' => '1', 'firstName' => 'Sarah', 'lastName' => 'Perkins', 'email' => 'sarahp@email.com'],
  ['id' => '2', 'firstName' => 'Bill', 'lastName' => 'Perkins', 'email' => 'billp@email.com'],
  ['id' => '3', 'firstName' => 'Daphne', 'lastName' => 'Cooper', 'email' => 'daphnec@email.com'],
  ['id' => '4', 'firstName' => 'Francis', 'lastName' => 'Moore', 'email' => 'francism@email.com'],
];




$email = $_POST['email'];

foreach($members as $member) {
  if ($member['email'] == $email) {
    header('Location: '.WWW_ROOT. '/members/index.php');
    echo "Match";
    exit();
  }
}
echo "Please enter a valid email";
?>


<?php include(SHARED_PATH . '/footer.php'); ?>