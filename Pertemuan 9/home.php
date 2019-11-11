<?php
session_start();
if (!isset($_SESSION['user']) || (trim ($_SESSION['user'])=='')){
    header('location:index.php');
}
include_once('user.php');
$user=new user();

$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP login Authentication OOP PABW</title>
</head>
<body>
<div>
    <h1> PHP Login Authentication OOP PABW</h1>
    <div>
      <div>
        <h2>Selamat datang di Dashboard</h2>
        <h4>User Info : </h4>
        <p>Name : <?php echo $row['frame']; ?></p>
        <p>Username : <?php echo $row['username']; ?></p>
        <p>Password : <?php echo $row['password']; ?></p>
        <a href="logout.php"><span></span> logout </a>
      </div>
    </div>
</div>
</body>
</html>
