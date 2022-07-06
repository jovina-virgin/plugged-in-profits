<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  margin-right: 100px;

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
form{margin-left: 200px; margin-right: 200px;}
input[type = submit]{background-color:#006400;padding: 16px 32px; text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
width: 20%;
color:#f3f3f3;
border-radius: 5px;
}
form a{color: #006400;}
</style>

</head>
<body>
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
if (isset($_POST['username'])){
  session_start();
  $_SESSION['username'] = $_POST['username'];
  $uname=$_POST['username'];
  $aadhar=$_POST['aadhar'];
  $sql="select * from customer where customer_id = '$uname' AND aadhar_no ='$aadhar'";
  $res = $pdo->query($sql);
  $count = $res->fetchColumn();
  if($count > 0){
    session_start();
    echo "<script> window.location.href='welcome.php';</script>";
    exit();
  }
  else{
    echo "<script> alert('Account does not exist. Try signing up.')
    window.location.href='signup1.php';</script>";
    exit();

  }}

?>
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
    <br><br><br><hr><br><br>
  <div class="wrapper">
    <header><center><h2>What are you waiting?<br>Login to enter the world of investments!</h2></center></header>
    <br><br><br><hr>
    <form method = "POST" action="#"><br><br>
          <input type="text" placeholder="Username" name="username">
          <br>
          <input type="text" placeholder="Aadhar number" name="aadhar"><br><br>
          <center>
      <div class="pass-txt"><a href="#">Forgot user credentials?</a></div><br>
      <input type="submit" value="Login"><br>
    <div class="sign-txt">Not yet member? <a href="signup1.php">Signup now</a></div></div>
  </center>
</form>
  </div>
</body>
</html>