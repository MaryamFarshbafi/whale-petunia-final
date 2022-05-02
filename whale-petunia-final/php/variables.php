<?php
function option($option, $value){
echo "<option value='$value'>" . $option . "</option>\n";

}
?>
<?php
$price1 =  $_POST['price'];
$price2 =  $_POST['price'];
$price3 =  $_POST['price'];
$price4 =  $_POST['price'];

$discount = " 20";
$tax = "5.5%";
$shipping = $_POST['shipping'];
$name= "name";
$payments = " 3";
$book1_quantity = $_POST['book1_quantity'];
$book2_quantity = $_POST['book2_quantity'];

$book3_quantity = $_POST['book3_quantity'];
$book4_quantity = $_POST['book4_quantity'];

$book1=15;
$book2=19;
$book3=25;
$book4=30;
$price = number_format ($price, 2);

$discount = number_format ($discount, 2);

$shipping = number_format ($shipping, 2);

$payments = number_format ($payments, 2);

$total_amount = number_format($total_amount,2);

$extended_price = number_format ($extended_price, 2);
$subtotal = number_format ($subtotal, 2);


$extended_price= $quantity   *  $price;

$totalbook1_quantity=  $book1_quantity *$book1;
$totalbook2_quantity=  $book2_quantity *$book2;
$totalbook3_quantity=  $book3_quantity *$book3;
$totalbook4_quantity=  $book4_quantity *$book4;

	
$subtotal=$totalbook1_quantity + $totalbook2_quantity + $totalbook3 +$totalbook4_quantity +$shipping-$discount;

$amount_of_tax_to_be_charged = ($subtotal * $tax )/100; 
$total_amount= $amount_of_tax_to_be_charged + $subtotal;
$total_quantity= $book1_quantity+ $book2_quantity+ $book4_quantity;$book4_quantity;



?> 