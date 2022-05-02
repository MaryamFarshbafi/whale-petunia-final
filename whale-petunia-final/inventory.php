
<?php

require_once("../../class_10/wp-functions/db_connect.php");

$con = mysqli_connect($servername, $db_username, $db_password, $db_name);

   // If no connection made, kill the attempt and give an error message
if(!$con) {
        die ("Connection failed: " . mysqli_connect_error());
   }

?>







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
		
			<h2 id="orderh2"> Inventory</h2>
			<br> <br><br>
		 
			
<table>
  <tr>
    <th>Author name</th>
	   <th>Book Title</th>
    <th>Format</th>
	  <th>Price</th>
	   <th>Series</th>
    <th>Inventory</th>
  </tr>
	

<?php
	// a = author table, t = title table, s = series table, and f = format table
	//ALIAS as a is the author table
	//ALIAS as t is the title table
	//ALIAS as s is the series table
	//ALIAS as f is the format table
	
$sql = "SELECT a.first_name, a.middle_name, a.last_name, ";
$sql .="t.book_title, t.price, t.inventory, ";
$sql .="s.series, ";
$sql .="f.format ";
$sql .="FROM author AS a ";
$sql  .="INNER JOIN title AS t ";
$sql  .="ON t.author_id= a.author_id ";	
$sql .="LEFT JOIN series AS s ";
$sql .= "ON s.series_id = t.series_id ";
$sql .="INNER JOIN format AS f ";
$sql .="ON f.format_id = t.format_id ";
$sql .="ORDER BY a.last_name ASC ";	
$result = mysqli_query($con, $sql);
// Check to see if access to table was successful or not
   if (!$result){
        die("Access to table failed: " . mysqli_error());
   }
	//While loop to display the results
while($item = mysqli_fetch_array($result)){
	
	 echo "<tr>"; 
	 echo "<td> ". $item ['first_name'] ." ". $item ['middle_name'] ." " . $item ['last_name'] . " </td>";
	  echo "<td>". $item ['book_title'] ."</td>"; 
	  echo "<td> ". $item ['format'] . "<td>" . $item ['price'] . " </td>";
	 echo "<td> ". $item ['series'] . "<td>" . $item ['inventory'] . " </td>";
	echo "</tr>"; 
		}
	
	
	?>


			</table>
			  

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
