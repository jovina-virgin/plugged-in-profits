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
  margin-right: 100px;

}

.container a {
  display: block;
}
.container li a:hover{
  color:  #006400;
}
#customers {
  border-collapse: collapse;
  width: 90%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: white;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #006400;
  color: white;
}
table {margin-left: 60px;}
.me {margin-left: 60px; font-size: 35px; font-weight: 600;}
</style>
</head>
<body>
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
    <br><br><br><hr>
    <header>
<br><br>
    <center><div class="hi"><h2>If your mutual fund is actively managed, you are an active investor. <br> Have a look at your funds.</h2></div></center><br><br><br><hr></header>
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
    	$total = 0;
    	$sql="select * from transactions where customer_id = '$uname' and scheme_id != 'NULL'";

    	$res = $pdo->query($sql);
    	$count = $res->fetchColumn();

    	if($count > 0){
    		foreach ($pdo->query($sql) as $row) {
    			$total = $total + $row['sip_amount'];
    		}
    	}
        echo "<br><br><div class = 'me'>Rs ";
    	echo $total;
        echo "</div>";
    ?>
    <br><br><br>
 <table id="customers">
 	<tr>
 		<th>Transaction Id</th>
 		<th>Scheme Id</th>
 		<th>Scheme Name</th>
 		<th>SIP Amount</th>
 		<th>Nav Quantity</th>
 	</tr>
  <?php
  $sql1 = "select transaction_id, funds.scheme_id, funds.scheme_name ,sip_amount, nav_quantity from transactions inner join funds on transactions.scheme_id = funds.scheme_id";
  
  foreach ($pdo->query($sql1) as $row) {
  	echo "<tr>
  	<td>$row[transaction_id]</td>
  	<td>$row[scheme_id]</td>
  	<td>$row[scheme_name]</td>
  	<td>$row[sip_amount]</td>
  	<td>$row[nav_quantity]</td></tr>";
  }

?>
</table>
</div>
</body>
</html>