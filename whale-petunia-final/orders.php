<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Whale &amp; Petunia Book Shoppe</title>
	
<link rel="stylesheet" type="text/css" href="../../wp-forms/reset.css" />
<link rel="stylesheet" type="text/css" href="../../wp-forms/styles.css" />

</head>

<body>
<header>	
	<div id="header-content">
			<img src="../../wp-forms/images/whale-petunia-logo.png" alt="Whale and Petunia Book Shoppe logo" />
			<nav>
				<ul>
					<li><a href="../../wp-forms/index.html">Home</a></li>
					<li><a href="../../wp-forms/about.html">About</a></li>
					<li><a href="../../wp-forms/books.php">Books</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="../../wp-forms/orders.php">Order</a></li>
					<li><a href="../../wp-forms/inventory.php">Inventory</a></li>

				</ul>
			</nav>
	</div> <!-- Closes header-content -->
</header>
	<div id="wrapper-white">
	

	</div> <!-- Closes wrapper-white -->		
	
	<div id="wrapper-shop">
	
		<div id="shop-content">
		
			<h2 id="orderh2">Place an Order</h2>
			<br> <br><br>
		  <form method="post" action="../../wp-forms/order-summary.php">
			  
			<table id="t01" >
  <tr>
    <th>Book Titel</th>
    <th>Price</th> 
    <th>Quantity</th>
  </tr>
  <tr>
    <td>Pride and Prejudice</td>
    <td>$15</td>
    <td><input type="text" id="book1_quantity" name="book1_quantity"></td>
  </tr>
  <tr>
    <td>The Great Controversy</td>
    <td>$19</td>
    <td><input type="text" id="book2_quantity" name="book2_quantity"></td>
  </tr>
  <tr>
    <td>Covenant Child</td>
    <td>$25</td>
    <td><input type="text" id="book3_quantity" name="book3_quantity"></td>
  </tr>
				 <tr>
    <td>Emily</td>
    <td>$30</td>
    <td><input type="text" id="book4_quantity" name="book4_quantity"></td>
  </tr>
				<tr>
<td colspan="3">
     <p><h2>Choose shipping option:</h2> 
	<br>
     <select name="shipping">
		 <?php
		 include 'php/variables.php';
		echo  $shipping_options = array("Overnight - $15" => 15,
                                       "First Class - $10" => 10,
                                        "Third Class - $5" => 5);
		 foreach ($shipping_options as $option => $value){
			 option($option, $value);}
		 ?>
          
     </select></p>
				<label for="name">Please add your name here :</label>
  <input type="text" id="name" name="name"><br><br>
		<p style="float: right"><input type="submit"></p>
</td>	
</tr>
			
</table>



  
			  
</form>
			<br>
			<br>
			<br>
			<br><br>
			 
		
		
		</div> <!-- Closes shop-content -->
		<br>
		<br>
		<br>
	
		
	
	</div> <!-- Closes wrapper-shop -->
	
	

	
	<footer>
		<div id="footer-content">
		
			<div id="footer-left">
				<h3>Whale & Petunia Book Shoppe</h3>
				<p>214 East Main Street<br>
					Menomonie, WI 54751</p>
				<p>P: (715) 233-6252<br>
				E: books@whalepetunia.com</p>
			</div>
			
			<div id="footer-right">
				<h3>Hours of Operation</h3>
				<p>Monday - Saturday: 8 am - 10 pm<br>
				   Sunday: 8 am - 4 pm</p>

				<p>Copyright © 2019 Whale and Petunia Book Shoppe.<br>All rights reserved.</p>
			</div>
			
		</div> <!-- Closes footer-content -->
	</footer>
		
	
	
</body>
</html>
