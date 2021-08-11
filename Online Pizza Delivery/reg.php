<?php
session_start();
?>

<html>
<head>
  <link rel="stylesheet" href="css/reg1.css?v=<?php echo time(); ?>">
</head>

<body style="margin-top:90px;">
	<div>
<div class="topnav">
<a class="a1" href="index.php">Home&nbsp;&nbsp;&nbsp;</a>
<a class="a1" href="menu.php">Menu&nbsp;&nbsp;&nbsp;</a>
<a class="a1" href="contact.php">Contact&nbsp;&nbsp;&nbsp;</a>
<a class="a1" href="about.php">About Us&nbsp;&nbsp;&nbsp;</a>
<a class="a1" href="login.php">Sign In&nbsp;&nbsp;&nbsp;</a>
</div>

<h3 class="head">Buttercrust</h3>
</div>

<div class="login">
<h1>Create Your Account</h1>
<form action="php/registration.php" method="post">
<div class="all">
<p class="head1">Name</p>
<input class="box" type="text" name="name" placeholder="Enter Name">
<p class="head1">Email</p>
<input class="box" type="text" name="email" placeholder="Enter Email Address">
<p class="head1">Password</p>
<input class="box" type="password" name="password" placeholder="Enter Password">
<p class="head1">Address</p>
<input class="box" type="text" name="address" placeholder="Enter Address">
<button class="btn" type="submit">Submit</button>

<p class="head3">Already have an account <a class="fp" href="login.php">Sign In</a> here.</p>
</div>
</form>

</div>


<br>
<br>
<br>
<br>


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

</body>
</html>
</body>
</html>