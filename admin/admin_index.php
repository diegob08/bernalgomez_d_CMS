<?php
//ini_set('display_errors',1);
//error_reporting(E_ALL);
require_once('phpscripts/config.php');
confirm_logged_in();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>CMS Portal</title>
</head>
<body>
  <div class="loginCont">
    <h1 class="title">Welcome to your admin page</h1>
    <?php echo "<h2>Hi-{$_SESSION['user_name']}</h2>"; ?>
    <ul>
      <li><a href="admin_createuser.php">Create User</a><br></li>
      <li><a href="admin_edituser.php">Edit User</a><br></li>
      <li><a href="admin_deleteuser.php">Fired</a><br></li>
      <li><a href="admin_movies.php">Movies Dashboard</a><br></li>
      <li>  <a href="phpscripts/caller.php?caller_id=logout">Sign Out</a></li>
    </ul>

</div>
</body>
</html>
