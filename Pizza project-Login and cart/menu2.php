<?php
session_start();
?>

<html>
<head>
  <link rel="stylesheet" href="css/menu1.css?v=<?php echo time(); ?>">
</head>




<body>
<div>
<div class="topnav">
<a class="a1" href="index2.php">Home&nbsp;&nbsp;&nbsp;</a>
<a class="a1" href="menu2.php">Menu&nbsp;&nbsp;&nbsp;</a>
<a class="a1" href="contact2.php">Contact&nbsp;&nbsp;&nbsp;</a>
<a class="a1" href="about2.php">About Us&nbsp;&nbsp;&nbsp;</a>
<?php 
    $count=0;
    if(isset($_SESSION['cart']))
    {
      $count= count($_SESSION['cart']);
    }
    ?>  
<a class="a1" href="cart.php">My Cart(<?php echo $count; ?>)&nbsp;&nbsp;&nbsp;</a> 
<a class="a1" href="index.php">Logout&nbsp;&nbsp;&nbsp;</a>
</div>

<h3 class="head">Buttercrust</h3>
</div>

<h1 class="heading"><center>Our Menu</center></h1>
<hr>


  <h2 class="pihead"><center>SUPREME</center></h2>
  <div class="row">
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p1.jpg" style="width:100%">
      <h3>Paneer Soya Supreme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.569</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Paneer Soya Supreme">
      <input type="hidden" name="Price" value="569">   
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p2.jpg" style="width:100%">
      <h3>Veg Exotica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.569</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Veg Exotica">
      <input type="hidden" name="Price" value="569">  
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p3.jpg" style="width:100%">
      <h3>Veggie Italiano&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.569</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Veggie Italiano">
      <input type="hidden" name="Price" value="569">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p4.jpg" style="width:100%">
      <h3>Veggie Supreme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspRs.569</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Veggie Supreme">
      <input type="hidden" name="Price" value="569">
    </div>
    </form>
  </div>
  


  <h2 class="pihead"><center>SIGNATURE</center></h2>

  <div class="row">
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p5.png" style="width:100%">
    	<h3>Country Feast&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.529</h3>
    	<center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Country Feast">
      <input type="hidden" name="Price" value="529">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p6.png" style="width:100%">
    	<h3>Farmers Pick&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.529</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Farmers Pick">
      <input type="hidden" name="Price" value="529">	
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p7.png" style="width:100%">
      <h3>Tandoori Paneer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.529</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Tandoori Paneer">
      <input type="hidden" name="Price" value="529">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p8.jpg" style="width:100%">
    	<h3>Veggie Lover&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspRs.529</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Veggie Lover">
      <input type="hidden" name="Price" value="529">
    </div>
    </form>
  </div>



<form action="php/manage_cart.php" method="POST">
  <h2 class="pihead"><center>FAVOURITE</center></h2>

  <div class="row">
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p9.jpg" style="width:100%">
    	<h3>Double Cheese&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.419</h3>
    	<center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Double Cheese">
      <input type="hidden" name="Price" value="419">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p10.png" style="width:100%">
    	<h3>Soya Masala&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.419</h3>
    	<center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Soya Masala">
      <input type="hidden" name="Price" value="419">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p11.jpg" style="width:100%">
      <h3>Spiced Paneer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.419</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Spiced Paneer">
      <input type="hidden" name="Price" value="419">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p12.jpg" style="width:100%">
    	<h3>Veggie Feast&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.419</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Veggie Feast">
      <input type="hidden" name="Price" value="419">
    </div>
    </form>
  </div>




  <h2 class="pihead"><center>CLASSIAC</center></h2>

  <div class="row">
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p13.jpg" style="width:100%">
    	<h3>Classic Corn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.279</h3>
    	<center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Classic Corn">
      <input type="hidden" name="Price" value="279">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p14.jpg" style="width:100%">
    	<h3>Classic Tomato&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.279</h3>
    	<center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Classic Tomato">
      <input type="hidden" name="Price" value="279">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p15.jpg" style="width:100%">
      <h3>Margherita&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.279</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Margherita">
      <input type="hidden" name="Price" value="279">
    </div>
    </form>
    <form action="php/manage_cart.php" method="POST">
    <div class="column">
      <img src="images/p16.jpg" style="width:100%">
    	<h3>Classic Corn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspRs.239</h3>
      <center><button type="submit" name="Add_To_Cart" class="testbutton">Add To Cart</button></center>
      <input type="hidden" name="Item_Name" value="Classic Corn">
      <input type="hidden" name="Price" value="239">
    </div>
    </form>
  </div>

<br>
<br>
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