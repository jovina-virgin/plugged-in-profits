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

#customers tr:nth-child(even){background-color: white; color: #464846;}

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
    </div><br><br><br><hr>
    <header>
<br><br>
    <center><div class="hi"><h2>It's a market of stocks, not a stock market. <br> Here are your investments.</h2></div></center><br><br><br><hr></header>
    <?php
$host= 'localhost';
$db = 'FinTech';
$user = 'postgres';
$password = 'jovi2303';
try {
	$dsn = "pgsql:host=$host;port=5432;dbname=$db;";
	// make a database connection
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
    	$sql="select * from transactions where customer_id = '$uname' and company_id != 'NULL'";

    	$res = $pdo->query($sql);
    	$count = $res->fetchColumn();

    	if($count > 0){
    		foreach ($pdo->query($sql) as $row) {
    			$total = $total + $row['rate'];
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
 		<th>Company Name</th>
 		<th>Timestamp</th>
 		<th>Share</th>
 		<th>Quantity</th>
 		<th>Rate</th>
 	</tr>
 	<?php
  $sql1 = "select transaction_id, timestamp, company.name, share, quantity, rate from transactions inner join company on company.id = transactions.company_id";
  
  foreach ($pdo->query($sql1) as $row) {
  	echo "<tr>
  	<td>$row[transaction_id]</td>
  	<td>$row[name]</td>
  	<td>$row[timestamp]</td>
  	<td>$row[share]</td>
  	<td>$row[quantity]</td>
  	<td>$row[rate]</td></tr>";
  }

?>
 </table>
</body>
</html>