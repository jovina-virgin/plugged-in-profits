<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plug-in-Profits</title>
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
.choice li a {
  color: #464846;
  text-decoration: none;
  font-size: 17px;
}
.choice li {
  display: inline;
  float: left;
  padding: 60px;

}
.choice li a:hover{
  color:  #006400;
}
.choice a {
  display: block;
}
.choice img {width: 150px; height: 150px;}

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
<header>
<br><br><br><hr><br><br>
	<center><div class="hi"><h2>Hello there! <br> Where do you want to go next?</h2></div></center><br><br><br><hr></header>

<div class="choice">
	<ul>
		<li><center><a href="bstocks.php"><img src="../imgs/trend.png"><br><br>Buy Stocks</a></center></li>
		<li><center><a href="bfunds.php"><img src="../imgs/salary.png"><br><br>Buy Mutual Funds</a></center></li>
		<li><center><a href="stocks.php"><img src="../imgs/bye.png"><br><br>Your Stocks</a></center></li>
		<center><li><center><a href="funds.php"><img src="../imgs/profits.png"><br><br>Your Funds</a></center></li>
		<li><center><a href="profile.php"><img src="../imgs/profile.png"><br><br>Profile</a></center></li></center>		
	</ul>
</div>
</body>
</html>