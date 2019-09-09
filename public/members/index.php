<?php require_once('../../private/initialize.php'); ?>

<?php
  $subjects = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
  ];
  $members = [
    ['id' => '1', 'firstName' => 'Sarah', 'lastName' => 'Perkins', 'email'
   => 'sarahn@email.com'],
    ['id' => '2', 'firstName' => 'Bill', 'lastName' => 'Perkins', 'email' =>
   'billn@email.com'],
    ['id' => '3', 'firstName' => 'Daphne', 'lastName' => 'Cooper', 'email'
   => 'daphnec@email.com'],
    ['id' => '4', 'firstName' => 'Francis', 'lastName' => 'Moore', 'email' => 'francism@email.com']
  ];
?>

<?php $page_title = 'Members'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="">Create New Member</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
  	    <th>Email</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($members as $member) { ?>
        <tr>
          <td><?php echo h($member['id']); ?></td>
          <td><?php echo h($member['firstName']); ?></td>
          <td><?php echo h($member['lastName']); ?></td>
    	    <td><?php echo h($member['email']); ?></td>
          <td><a class="action" href="<?php echo url_for('/members/show.php?id=' . h(u($member['id']))); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
