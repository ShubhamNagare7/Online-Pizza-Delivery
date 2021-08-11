<?php
session_start();
?>

<html>
<head>
<title>Buttercrust</title>
<link rel="icon" href="images/pizza.png">
<link rel="stylesheet" href="css/home1.css">
</head>

<body>

<div class="topnav-right">

<a href="index2.php">Home&nbsp;&nbsp;&nbsp;</a>
<a href="menu2.php">Menu&nbsp;&nbsp;&nbsp;</a>
<a href="contact2.php">Contact&nbsp;&nbsp;&nbsp;</a>
<a href="about2.php">About Us&nbsp;&nbsp;&nbsp;</a>
<?php 
	$count=0;
	if(isset($_SESSION['cart']))
	{
		$count= count($_SESSION['cart']);
	}
?>
<a href="cart.php">My Cart(<?php echo $count; ?>)&nbsp;&nbsp;&nbsp;</a>
<a href="index.php">Logout&nbsp;</a>
<br>
<p style="text-align: right; color:#FF9B38">Welcome <?php echo $_SESSION['username'];?>&nbsp;</p>
  
 </div>
<div class="height">
<h1 class="h1">Buttercrust</h1>
<h2 class="h2">The Pizza House...</h2>

<a class="btn" href="menu2.php"><button class="testbutton" type="button">Start My Order Now !</button></a>
</div>
<br>

<div class="btm1">
<div class="btm">
<center><b>Follow Us</b></center>
  </div>
<div class="bottom-bar">
<center>
<a href="https://www.facebook.com/" imageanchor="1">
<img class="fb" src="images/Facebook.png" border="0"></a>
&nbsp;&nbsp;
<a href="https://www.twitter.com/" imageanchor="1">
<img class="fb"src="images/Twitter.png" border="0"></a>
&nbsp;&nbsp;
<a href="https://www.linkedin.com/" imageanchor="1">
<img class="fb" src="images/Linkedin.png" border="0"></a>
&nbsp;&nbsp;
<a href="https://www.instagram.com/" imageanchor="1">
<img class="fb" src="images/Instagram.png" border="0"></a>
</center>
 </div>


<div class="footer-link">
<p><center>© 2020 Buttercrust</center></p>
</div>
</div>


</body>
</html>