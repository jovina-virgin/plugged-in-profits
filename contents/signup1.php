<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plugged-In-Profits</title>
	<link rel="shortcut icon" type="imgs/jpg" href="../imgs/stock.png">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">
<style type="text/css">
	h1{font-family: 'Dancing Script', cursive;}
    body {font-family: 'Roboto', sans-serif; background-color: #f3f3f3; margin: }
    .logo img {float: left; margin-right: 10px; margin-left: 10px;}
    
.logo{margin: 50px; margin-left: 20px;}
li a {
  color: #464846;
  text-decoration: none;
  font-size: 17px;
}
li {
  display: inline;
  float: right;
  padding: 15px;

}
ul{
    margin-right: 85px;

}

a {
    display: block;
}
li a:hover{
    color:  #006400;
}
header {color: #006400;}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
   border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=text]:focus {
  border: 3px solid #006400;
}
input[type=number] {
  width: 100%;
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
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
textarea:focus{
    border: 3px solid #006400;
}
form{margin-left: 200px; margin-right: 200px;}
input[type = submit]{background-color:#006400;padding: 16px 32px; text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
width: 20%;
color:#f3f3f3;
border-radius: 5px;
}

</style>
</head>
<body>
<div class="logo">
        <a href="../home1.php"><img src="../imgs/logo.png" alt="logo pic"></a>
        <h1>Plugged-In-Profits</h1>
        
    </div>
    <div class="container">
        </div>
    <ul class="nav-area">
        <li><a href="signup.php">Login</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <br><br><br><hr>
    <br><br>
    <header><center><h2>Don't think twice.<br>Create an account now to get instant access to various investment options!</h2></center></header><br><br><br><hr><br><br>
    <form method="POST" action="#">
    	<input type="text" name="id" placeholder="Username"><br>
    	<input type="text" name="name" placeholder="Name"><br>
    	<input type="number" name="number" placeholder="Contact"><br>
    	<input type="text" name="pan" placeholder="Pan Number"><br>
    	<input type="text" name="aadhar" placeholder="Aadhar"><br>
    	<textarea name="address"  placeholder="Address"></textarea><br><br>
    	<input type="submit" value="SUBMIT" name="submit" />
    </form>
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
  echo "<script>alert('connection established');</script>";
}*/
} catch (PDOException $e) {
  die($e->getMessage());
} /*finally {
  if ($pdo) {
    $pdo = null;
  }
}*/
if (isset($_POST['submit'])) {
	$uname = $_POST['id'];
	$n = $_POST['name'];
	$num = $_POST['number'];
	$pan = $_POST['pan'];
	$aa = $_POST['aadhar'];
	$add = $_POST['address'];
	$sql = "select * from customer where customer_id = '$uname'";
	$res = $pdo->query($sql);
  $count = $res->fetchColumn();
  if($count == 0){
  	$sql1 = "insert into customer values('$uname','$n', '$num', '$add', '$pan', '$aa')";
  	$pdo->query($sql1);
  	echo "<script>alert('Account Created! Login now.');
  	window.location.href='signup.php';</script>";

  }
  else{
  	echo "<script>alert('Username already exists. Try something else.');</script>";
  }
}
    ?>
</body>
</html>