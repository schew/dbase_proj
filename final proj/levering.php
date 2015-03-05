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

  <script>
    function setStation(selected) {
        var menu = document.stationForm.entree;
        var menu2 = document.stationForm.side;
        menu.options.length = 0;
        menu2.options.length = 0;

        if (selected == "") {
            menu.options[menu.options.length] = new Option("Please select one of the above first");
        }
        if (selected == "crust"){
            menu.options[menu.options.length] = new Option("Cheese Pizza");
            menu.options[menu.options.length] = new Option("Pepperoni Pizza");
            menu.options[menu.options.length] = new Option("Vegetable Pizza");
            menu.options[menu.options.length] = new Option("Specialty Pizza");
            menu.options[menu.options.length] = new Option("Calzone");
        }
        if (selected == "lunchbox") {
            menu.options[menu.options.length] = new Option("Salad");
            menu.options[menu.options.length] = new Option("Full Sandwich");
            menu.options[menu.options.length] = new Option("Half Sandwich");
            menu.options[menu.options.length] = new Option("Sandwich + Soup");
        }
        if (selected == "shiso") {
            menu.options[menu.options.length] = new Option("California Roll");
            menu.options[menu.options.length] = new Option("Crunchy Roll");
            menu.options[menu.options.length] = new Option("Sashimi Special");
        }
        if (selected == "onebowl") {
            menu.options[menu.options.length] = new Option("Noodles + Chicken broth");
            menu.options[menu.options.length] = new Option("Rice + Teriyaki sauce");
        }
        if (selected == "flame") {
            menu.options[menu.options.length] = new Option("Cheeseburger");
            menu.options[menu.options.length] = new Option("Hamburger");
            menu.options[menu.options.length] = new Option("Philly Cheesesteak");
            menu2.options[menu2.options.length] = new Option("");
            menu2.options[menu2.options.length] = new Option("French Fries");
            menu2.options[menu2.options.length] = new Option("Curly French Fries");
            menu2.options[menu2.options.length] = new Option("Sweet Potato Fries");
        }
    }
  </script>
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
    $location = 'Levering';
    $date = '11/16/14';

    // Call stored procedure
    $query = "CALL viewmenu('" . $location . "', '" . $date . "');";
    $result = mysql_query($query);
    $row = mysql_fetch_row($result);
echo $row[0];

?>

  <div id="middle">
    <h1>The Market at Levering</h1>
    <p>Today's menu is:
    <ul>
        <?php
            foreach ($row as &$value) {
        ?>
        <li><?php echo $value; ?></li>
        <?php
            }
        ?>
    </ul>
    </p>
    <p>Please select the item you would like to order.</p>
    <form name="stationForm" action="levering.php" method="post" >
        <select name="station" size="1" onchange="setStation(document.stationForm.station.options[document.stationForm.station.selectedIndex].value);">
            <option value=" "></option>
            <option value="crust">Crust</option>
            <option value="lunchbox">Lunchbox</option>
            <option value="shiso">Shiso</option>
            <option value="onebowl">One Bowl</option>
            <option value="flame">Flame</option>
        </select><br><br>
        Entree<br>
        <select name="entree" size="1">
            <option value=" ">Please select one of the options above first</option>
        </select><br><br>
    <input type="submit" onclick="alert(document.stationForm.entree.options[document.stationForm.entree.selectedIndex].value);">
    </form>

  </div>
</body>

</html>