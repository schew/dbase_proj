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

  <div id="middle">
    <h1>Nolan's on 33rd</h1>
    <form action="index.php" method="post">
        <h2>The Egg and the Noodle</h2>
        <select name="noodle">
            <option value=" "></option>
            <option value="pasta">Pasta</option>
            <option value="omelette">Omelette</option>
        </select> <br><br>

        <h2>Tacqueria</h2>
        <select name="tacqueria">
            <option value=" "></option>
            <option value="bowl">Bowl</option>
            <option value="burrito">Burrito</option>
        </select> <br><br>

        <h2>Grill</h2>
        <select name="grill">
            <option value=" "></option>
            <option value="burger1">Burger 1</option>
            <option value="burger2">Burger 2</option>
            <option value="burger3">Burger 3</option>
            <option value="burger4">Burger 4</option>
            <option value="burger5">Burger 5</option>
            <option value="burger6">Burger 6</option>
        </select> <br>
        <h4>Sides</h4>
        <select name="sides">
            <option value=" "></option>
            <option value="homestyle">Homestyle of the Day</option>
            <option value="vegetable">Vegetable of the Day</option>
        </select> <br><br>

        <h2>Roma</h2>
        <select name="roma">
            <option value=" "></option>
            <option value="pizza1">Cheese pizza</option>
            <option value="pizza2">Pepperoni pizza</option>
            <option value="pizza3">Vegetable pizza</option>
            <option value="pizza4">Sausage pizza</option>
            <option value="calzone">Calzone</option>
        </select> <br><br>

        <h2>Wings Around the World</h2>
        <h4>Chicken</h4>
        <select name="wings">
            <option value=" "></option>
            <option value="grilled">Fried chicken tenders</option>
            <option value="fried">Grilled chicken</option>
        </select> <br>
        <h4>Wrap</h4>
        <select name="wings2">
            <option value=" "></option>
            <option value="wrap">Wrap</option>
            <option value="nowrap">No wrap</option>
        </select> <br>
        <h4>Sides</h4>
        <select name="wings3">
            <option value=" "></option>
            <option value="fries">Waffles fries</option>
            <option value="rings">Onion rings</option>
        </select> <br><br>

        <h2>Dessert</h2>
        <select name="dessert">
            <option value=" "></option>
            <option value="icecream">Ice Cream</option>
            <option value="cookie">Cookie</option>
            <option value="pudding">Break pudding</option>
        </select><br><br>

    <input type="submit">
    </form>  </div>

</body>

</html>