<?php
session_start();
if(!session_is_registered(jhed)){
header("location:index.html");
}
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>JHU Dining Orders</title>
  <link rel="stylesheet" href="pages.css"/>
  <meta name="description" content="jhu online dining order">
  <meta name="keywords" content="jhu, johns, hopkins, dining, order, service">
</head>

<body>

  <div id="head">
    <h1>JHU DINING ORDERS</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="ffc.php">Fresh Food Cafe</a></li>
      <li><a href="levering.php">Levering Hall</a></li>
      <li><a href="nolans.php">Nolan's on 33rd</a></li>
      <li><a href="account.php">Account</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

  <div id="middle">
    <h1>Welcome</h1>
    <p>Please use the navigation bar on the left to place an order or see your account balance.</p>
  </div>

</body>

</html>