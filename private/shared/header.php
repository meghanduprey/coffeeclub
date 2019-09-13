<?php
  if(!isset($page_title)) { $page_title = 'Member Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Coffee Club - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Coffee Club Member Area</h1>
    </header>

    <nav>
      <ul>
        <li><a href="<?php echo url_for('/index.php'); ?>">Menu</a></li>
      </ul>
    </nav>
