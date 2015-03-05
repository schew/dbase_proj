<?php
session_start();
?>

<!DOCTYPE html>
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

<?php
    // Open database connection
    include 'config.php';
    include 'open.php';

    // Call stored procedure
    $query = "CALL accountinfo('" . $_SESSION['jhed'] . "');";
    $result = mysql_query($query);
    $row = mysql_fetch_row($result);
?>

  <div id="middle">
    <h1>Account</h1>
    <p>Your current JCash balance is: <?php echo $row[0]; ?></p> <br>
    <p>Your current dining dollar balance is: <?php echo $row[1]; ?></p><br><br>
  </div>

</body>

</html>