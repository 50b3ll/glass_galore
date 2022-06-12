<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>added to cart</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
	
</head>


<?php 

session_start() ;

include 'includes/sidebar.html';

if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';
?>
<div class='column2' ><div class='containerPage' style='padding:200px 200px 320px'>
<?php

if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

require ( 'connect_db.php' ) ;

$q = "SELECT * FROM shop WHERE item_id = $id" ;
$r = mysqli_query( $dbc, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );


  if ( isset( $_SESSION['cart'][$id] ) )
  { 

    $_SESSION['cart'][$id]['quantity']++;

    echo '<div class="added">Another '.$row["item_name"].$row["style"].' has been added to your cart</div>';
  } 
  else
  {

    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['item_price'] ) ;
       extract($row);
	   echo '<div >A '.$row["item_name"].$row["style"].' has been added to your cart</div>' ;
  }
}


mysqli_close($dbc);

?>

<br><a href='productslist.php' class='gen-btn'>Continue shopping</a> <br>
<a href='cart.php' class='gen-btn' style='text-align:center'>View Cart</a> 


</div></div>
  	<div class="footer" style="margin-left 300px important!"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>