<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plugged-in-Profits</title>
	<link rel="shortcut icon" type="imgs/jpg" href="../imgs/stock.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">
<style type="text/css">
    h1{font-family: 'Dancing Script', cursive;}
  body {font-family: 'Roboto', sans-serif; background-color: #f3f3f3; margin: }
  .logo img {float: left; margin-right: 10px; margin-left: 10px;}
 header {color: #006400;}
  
.logo{margin: 50px; margin-left: 20px;}
.container li a {
  color: #464846;
  text-decoration: none;
  font-size: 17px;
}
.container li {
  display: inline;
  float: right;
  padding: 15px;

}
.container ul{
  margin-right: 85px;

}

.container a {
  display: block;
}
.container li a:hover{
  color:  #006400;}
  .box {
    width: 300px;
  border: 15px solid #006400;
  padding: 50px;
  margin: 20px;
  }
  .box h3{font-size: 30px; font-weight: 600;}
</style>
</head>
<body>
<div class="logo">
        <a href="welcome.php"><img src="../imgs/logo.png" alt="logo pic"></a>
        <h1>Plugged-In-Profits</h1>
    </div>
    <div class="container">
    <ul class="nav-area">
        <li><a href="logout.php">Logout</a></li>
    	<li><a href="profile.php">Profile</a></li>
        <li><a href="funds.php">Your Funds</a></li>
        <li><a href="stocks.php">Your Stocks</a></li>
        <li><a href="bfunds.php">Buy Funds</a></li>
        <li><a href="bstocks.php">Buy Stocks</a></li>
    </ul>
    </div>
    <br><br><br><hr>
    <header>
<br><br>
    <center><div class="hi"><h2>User Details<br>For any updates contact admin.</h2></div></center><br><br><br><hr></header>
<br>
    
    <?php
    $host= 'localhost';
$db = 'FinTech';
$user = 'postgres';
$password = 'jovi2303';
try {
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
    // make a database connection
    global $pdo;
     $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the error mode to exceptions
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); // run real prepared queries

    /*if ($pdo) {
        echo "Connected to the $db database successfully!";
    }*/
} catch (PDOException $e) {
    die($e->getMessage());
} /*finally {
    if ($pdo) {
        $pdo = null;
    }

}*/
session_start();
$uname = $_SESSION['username'];
$sql = "select * from customer where customer_id = '$uname'";
foreach ($pdo->query($sql) as $row) {
    echo "<center><div class = 'box'><h3>Name: $row[name]</h3>
    Unique Id: $row[customer_id]<br>
    Contact Number: $row[contact]<br>
    Address: $row[address]<br>
    Pan Number: $row[pan_no]<br>
    Aadhar Number: $row[aadhar_no]<br></div></center>";
}
?>
</body>
</html>