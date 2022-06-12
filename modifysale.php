
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>paperweights for sale</title>
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
  <div class="column2" >  
  	<div class="containerPage">

<?php	

$dbc = mysqli_connect("localhost", "root", "", "new_db") 
OR die(mysqli_connect_error());

mysqli_set_charset( $dbc, 'utf8' ) ;




if (isset($_REQUEST['id']))
{
	
$item_id=$_REQUEST ['id'];

	$item_name = $_POST ['item_name'];
	$style = $_POST ['style'];	
	$item_origin = $_POST ['item_origin'];
	$item_price = $_POST['item_price'];
	$item_desc = $_POST['item_desc'];

			
	if(isset($_POST["submit"])) {
	$sql = "UPDATE shop SET item_name='$item_name', style='$style', item_origin='$item_origin', item_price='$item_price', item_desc='$item_desc' WHERE item_id='$item_id'";}
		   
	if ($dbc->query($sql) === TRUE) {
  echo "Listing updated successfully<br>";
  echo "<a href='productslist.php' class='btn-gen' style='margin-bottom:100px'>Go to paperweights for sale</>";
} else {
  echo "Error updating listing: " . $dbc->error;
}	}

?>    	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  

	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>