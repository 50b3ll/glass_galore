<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>checkout</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
	<style>

	</style>
</head>
<body>

<?php 
session_start() ; 

include 'includes/sidebar.html';

if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'html/new.html' ) ; load() ; }
?> 

<div class="container">
<div class='column2' ><div class='containerPage'>

<?php

if ( isset( $_GET['total'] ) && ( $_GET['total'] > 0 ) && (!empty($_SESSION['cart']) ) )
{

  require ('connect_db.php');
  
  $q = "INSERT INTO orders ( user_id, total, order_date ) VALUES (". $_SESSION['user_id'].",".$_GET['total'].", NOW() ) ";
  $r = mysqli_query ($dbc, $q);
  
  $order_id = mysqli_insert_id($dbc) ;
  
  $q = "SELECT * FROM shop WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($dbc, $q);

  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    $query = "INSERT INTO order_contents ( order_id, item_id, quantity, price )
    VALUES ( $order_id, ".$row['item_id'].",".$_SESSION['cart'][$row['item_id']]['quantity'].",".$_SESSION['cart'][$row['item_id']]['price'].")" ;
    $result = mysqli_query($dbc,$query);
  }
  
  mysqli_close($dbc);

  echo "<div style='margin:100px 300px 300px'><img src='images/order.png'> <h3 style='margin-left:60px'>Your Order Number Is #".$order_id."</h3><br>
	<a href='productslist.php' class='gen-btn' style='margin-left:120px'> Continue shopping</a></div>";

  $_SESSION['cart'] = NULL ;
}

else { echo " <div style='margin:100px 400px'><img src='images/emptycart.png'>
<a href='productslist.php' style='margin-left:100px' class='gen-btn' > Continue shopping</a></div>"; }

?>
</div></div>
  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>