<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<body>
	<div class="topnav">
		<a class="a1" href="index2.php">Home&nbsp;&nbsp;&nbsp;</a>
		<a class="a1" href="menu2.php">Menu&nbsp;&nbsp;&nbsp;</a>
		<a class="a1" href="contact2.php">Contact&nbsp;&nbsp;&nbsp;</a>
		<a class="a1" href="about2.php">About Us&nbsp;&nbsp;&nbsp;</a>
		<a class="a1" href="index.php">Logout&nbsp;</a>
	</div>
	<div  class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5">
				<h1>My Cart</h1>
			</div>

			<div class="col-lg-9">
				<table class="table">
				  <thead class="text-center">
				    <tr>
				      <th scope="col">Serial No.</th>
				      <th scope="col">Item Name</th>
				      <th scope="col">Item Price</th>
				      <th scope="col">Quantity</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody class="text-center">
				  	<?php 

				  	$total=0;
				  	if(isset($_SESSION['cart']))
				  	{
				  		foreach ($_SESSION['cart'] as $key => $value)
				  		{
				  			$sr= $key + 1;
				  			$total=$total+$value['Price'];
				  			echo "
				  				<tr>
				  					<td>$sr</td>
				  					<td>$value[Item_Name]</td>
				  					<td>$value[Price]</td>
				  					<td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
				  					<td>
				  						<form action='php/manage_cart.php' method='POST'>
				  							<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
				  							<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
				  						</form>
				  					</td>
				  				</tr>
				  			";
				  		}
				  	}

				  	?>
				  </tbody>
				</table>
			</div>
			<div class="col-lg-3">
				<div class="border bg-light rounded p-4">
					<h4>Total:</h4>
					<h5 class="text-right"><?php echo $total ?></h5>
					<br>
					<h5>Payment Method:</h5>
					<form>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flex-RadioDefault" id="flexRadioDefault2">
							<input type="hidden" name="Item_Name" value="$value[Item_Name]">
							<label class="form-check-label" for="flexRadioDefault2">
								Google Pay
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flex-RadioDefault" id="flexRadioDefault2">
							<input type="hidden" name="Item_Name" value="$value[Item_Name]">
							<label class="form-check-label" for="flexRadioDefault2">
								Cash On Delivery
							</label>
						</div>
						<button class="btn btn-primary btn-block">Make Purchase</button>
					</form>	
				</div>			
			</div>
		</div>
	</div>
</body>
</html>