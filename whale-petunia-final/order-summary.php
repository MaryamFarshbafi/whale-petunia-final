<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Whale &amp; Petunia Book Shoppe</title>
	
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>
<header>	
	<div id="header-content">
			<img src="images/whale-petunia-logo.png" alt="Whale and Petunia Book Shoppe logo" />
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="books.php">Books</a></li>
					<li><a href="#">Contact</a></li>
                  <li><a href="orders.php">Order</a></li>
                  <li><a href="inventory.php">Inventory</a></li>

				</ul>
			</nav>
	</div> <!-- Closes header-content -->
</header>
	

	</div> <!-- Closes wrapper-white -->		
	
	<div id="wrapper-shop">
	
		<div id="shop-content">
		
			<h2 id=orderh2>Order Summary</h2>
			<br>
			<br>
			<div align="center">
			 Thank you, <?php echo $_POST["name"] ; ?> for purchasing from Whale & Petunia Book Shope! 
				</div>
			<br>
			<br><br>
			<?php
			include "php/variables.php"; 
			
		echo "<table id='t01'>";
 
 echo "<tr>";
   echo "<th>Book Titel  </th>";
   echo "<th>Price </th>";
echo "<th>Quantity </th>";
echo "<th> ExtendedPrice  </th>";
echo  "</tr>";
			
		
	echo "<tr>";
			
  echo  "<td '$'> Pride and Prejudice </td>";
    echo "  <td >  $book1</td>";
   echo "  <td> $book1_quantity </td>";
			 echo "  <td> $totalbook1_quantity </td>";
  echo "</tr>";
			
	echo "<tr>";
			
  echo  "<td '$'> The Great Controversy </td>";
    echo "  <td >  $book2</td>";
   echo "  <td> $book2_quantity </td>";
			 echo "  <td> $totalbook2_quantity </td>";
  echo "</tr>";		
	
			echo "<tr>";
			
  echo  "<td '$'>  Covenant Child</td>";
    echo "  <td >  $book3</td>";
   echo "  <td> $book3_quantity </td>";
			 echo "  <td> $totalbook3_quantity </td>";
  echo "</tr>";	
	
			echo "<tr>";
			
  echo  "<td '$'> Emily </td>";
    echo "  <td >  $book4</td>";
   echo "  <td> $book4_quantity </td>";
			 echo "  <td> $totalbook4_quantity </td>";
  echo "</tr>";	
			
	echo	"<tr >";
  echo " <td colspan='3' >Subtotla </td>";   
     echo " <td> $subtotal  </td>";

 echo "</tr>";
			
  echo "<tr>";
   echo " <td colspan='3'>shipping </td>";
    echo "  <td>  $shipping  </td>";
	 
  "</tr>";
 echo "<tr>";
 echo " <td colspan='3'>Disccount </td>";
  echo "   <td $>  $discount  </td>";
  "</tr>";
	 
		echo	"<tr>";
    echo " <td colspan='3'> Tax(5.5%) </td>"; 
   echo " <td>  $amount_of_tax_to_be_charged </td>";  

  echo "</tr>";
		echo "<tr>";
     echo " <td colspan='3'> Total </td>";
   echo " <td>  $total_amount  </td>";  
    
 echo "</tr>";
				
				
echo "</table>";


		?>	
			
	<?php
if ($book1_quantity==0&& $book2_quantity==0&& $book3_quantity==0  && $book4_quantity==0){
	echo("You did not order anything!");
}
else{
	echo("");
		
}			
	if ($book1_qty >= 1) {
    
} // close if statement		
	?>
 
		

		
		</div> 
		<br>
		<br>
		<br>
	<p style="text-align: center">Divided over 3 monthly payments, that would be $54.51 each.
</p>
		
	
	</div> 
	
	

	
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
			
		</div> 
	</footer>
		
	
	
</body>
</html>
