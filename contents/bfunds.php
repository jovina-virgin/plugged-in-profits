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
.body{
    margin: auto;
  width: 50%;
  padding: 10px;
  font-size: 17px;
  margin-left: 400px;
}
input[type=number] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
   border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=number]:focus {
  border: 3px solid #006400;
}
button {background-color:#006400;padding: 16px 32px; text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
width: 20%;
color:#f3f3f3;
border-radius: 5px;
margin-left: 5px;
height: 45px;
}

</style>
</head>
<body>
<div class="logo">
        <a href="welcome.php"><img src="../imgs/logo.png" alt="logo pic"></a><h1>Plugged-In-Profits</h1>
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
    <center><div class="hi"><h2>Mutual funds were created to make investing easy, <br>so consumers wouldn't have to be burdened with picking individual stocks.</h2></div></center><br><br><br><hr></header>
    

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
$sql = "select * from funds";

    foreach($pdo->query($sql) as $row){
        echo "<div class = 'body'>
        <h3><u>$row[scheme_name]</u></h3>
        ID: $row[scheme_id]<br>
        Nav Price: $row[nav_price]<br>
        Scheme Manger: $row[scheme_manager]<br>
        <form method = 'POST' action = '#'>
        <input type= 'number' name='amount' step='.01'><button name = 'buy' class = 'buy'>Buy</button>
        <input type = 'hidden' name = 'id' value = '$row[scheme_id]'>
        </form>
        </tr><br></div>";
    }


if(isset($_POST['buy'])){
    $uname = $_SESSION['username'];
    $amt = $_POST['amount'];
    $id = $_POST['id'];
    $quantity = 0.00;
    $np = 0.00;
    $sql1 = "select * from funds where scheme_id = '$id'";
    foreach ($pdo->query($sql1) as $row) {
        $np = $row['nav_price'];
        $quantity = $amt/$np;
    }
    

    echo"<script>alert('Investment Confirmation: Amount paid ' +$amt)</script>;";
    $sql = "insert into transactions(customer_id, scheme_id, sip_amount, nav_quantity) values('$uname','$id', '$amt', '$quantity')";
    $pdo->query($sql);
    



    
    
}
?>
</body>
</html>