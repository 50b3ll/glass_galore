<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>cart</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
	
</head>

<body>

<?php 
session_start() ; 

include 'includes/sidebar.html';

if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';
?>
  <div class='column2' ><div class='containerPage'>
<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{

  foreach ( $_POST['qty'] as $item_id => $item_qty )
  {
  
    $id = (int) $item_id;
    $qty = (int) $item_qty;

    if ( $qty == 0 ) { unset ($_SESSION['cart'][$id]); } 
    elseif ( $qty > 0 ) { $_SESSION['cart'][$id]['quantity'] = $qty; }
  }
}

$total = 0; 

if (!empty($_SESSION['cart']))
{
  require ('connect_db.php');
  
  $q = "SELECT * FROM shop WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($dbc, $q);

  echo
  "<div class='cartbox' style='margin-left:50px'>
	<div class='title2'>


	<form action='cart.php' method='post'>

	Items in your cart    </div>";

  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];
    $total += $subtotal;

    echo "
	<div class='item'>
    <div class='image' >
    <img style='width:100px' src= {$row['item_img']}>
    </div>

<div class=''>
{$row['item_name']}<br>
{$row['style']}
</div>

<div class=''>
{$row['item_desc']}
</div>

<div class=''>
<input type=\"text\" size=\"3\" name=\"qty[{$row['item_id']}]\" 
    value=\"{$_SESSION['cart'][$row['item_id']]['quantity']}\">
    </div>
    
    <div class='prices'>$ {$row['item_price']} each = </div> 
    
    <div class='prices' align='right'>$".number_format ($subtotal, 2)."</div></div></p>";
  }

  mysqli_close($dbc); 

    echo "<p> <div class=''><br>Total =$".number_format($total,2)."   </p>
 <p>
 
 <input type='submit' name='submit' class='button' value='Update My Cart'></form></p>";

echo "<div class=''>
<a href='checkout.php?total=".$total."'class='gen-btn' style='text-align: center'>Checkout</a> 
<br><a href='productslist.php' class='gen-btn'>Continue shopping</a> <br></div></div></div>

</div>
" ;
}

else

{ echo " <div style='margin:100px 300px 300px'><img src='images/emptycart.png' >
<a href='productslist.php' class='gen-btn' style='text-align:center'>Continue shopping</a></div>"; }

?>


</div>

  	<div style="margin-left 700px important!"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>