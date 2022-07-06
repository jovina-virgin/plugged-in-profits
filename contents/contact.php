<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plugged-in-Profits</title>
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
.content {margin-left: 100px;}
.content-form h2 {font-weight: 500; olor: #464846;}
.content-form a {color: #006400;}
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
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
        <header>
            <center><h2>We would love to respond to your queries and help you succeed.<br>Feel free to get in touch with us!</h2></center>
        </header><br><br><br><hr>
        <form method="POST" action="#"> 
<br><br>     
    
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   <br>
  <input name="email" type="text" class="feedback-input" placeholder="Email" /><br>
  <textarea name="text" class="feedback-input" placeholder="Leave us a message"></textarea><br>
  <input type="submit" value="SUBMIT" name="submit" />
</form>
        <div class="content">
            <div class="content-form">
                <div class="row">
                <section>
                    <br><br><div class="column"><center>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2>Address</h2>
                    <p>
                        12, Bharathi Street, <br>
                        Pembrooke Avenue, <br>
                        Velacherry,<br>
                        Chennai - 620010
                    </p></center></div>
                </section>
                
                <section><div class="column"><center>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone</h2>
                    <p>044-244987261<br>044-239902561</p></center></div>
                </section>
                
                <section><div class="column"><center>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p><a href="mailto:pluggedinprofits@gmail.com">pluggedinprofits@gmail.com</a></p></div></div>
                </section>
            </div>
            </div>
        </div>
        <br><br>
     
        <div class="media">
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            <li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/explore"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
        </div>
        <div class="empty">

        </div>
    </div>  
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
  $name = $_POST['name'];
  $email = $_POST['email'];
  $ques = $_POST['text'];
  $sql = "insert into feedback(name, email, query) values('$name', '$email', '$ques')" ;
  $pdo->query($sql);
  echo "<script>alert('Message has been sent! You will hear from us soon.');</script>";
}
    ?> 
</body>
</html>