<html>
<body>
<?php
    session_start();
    ini_set('display_errors', 'On');
    // Open database connection
    include 'config.php';
    include 'open.php';

    // Pass in input information as arguments to stored procedure
    $password = $_POST["password"];
    $jhed = $_POST["jhed"];

    // Call stored procedure
    $query = "CALL login('" . $jhed . "', '" . $password . "');";

    // Print out output from query
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
    if($count == 1){
        $_SESSION['jhed'] = $jhed;
        $_SESSION['password'] = $password; 
        header("location:homepage.php");
    } else {
        printf("<br>Sorry; This Password is incorrect.");
        header("location:index.html");
    }
    
    // Close database connection
    include 'close.php';
?>
</body>
</html>