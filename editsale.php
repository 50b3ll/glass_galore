<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>edit sale</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
	<style>
	        .posting {
            margin-left: 100px;
            margin-top: 30px;
            display: inline-block;
            padding: 5px;
            color:  black;
            font-size: large;
            font-family: sans-serif;
            width:auto;
        }
	
	
	
	</style>
</head>

<body>


	
	<?php 
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }


include 'includes/sidebar.html';


if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';



require ( 'connect_db.php' ) ;

if (isset($_REQUEST['item_id']))

$item_id=$_REQUEST ['item_id'];
$item_id=$_REQUEST ['id'];
$q = "SELECT * FROM shop WHERE item_id = $item_id" ;

$r =mysqli_query ($dbc, $q);

$data =$r->fetch_assoc();
#print_r($data);
?>
 
<div class='column2' ><div class='containerPage'><h2>Editing my sales post</h2>
<div class='posting'>
<form action='modifysale.php?id=<?=$item_id?>' method='post' enctype='multipart/form-data' accept-charset='utf-8'>

<p>Item name:<br><input name='item_name' type='text' size='66' maxlength='100' placeholder='maker name'value='<?=$data["item_name"]?>'></p>

<p>Style:<br><input name='style' type='text' size='66' maxlength='100' placeholder='style'value='<?=$data["style"]?>'></p>

<p>Type:<br><input name='type' type='text' size='66' maxlength='100' placeholder='type'value='<?=$data["type"]?>'></p>		
<p>Origin:<br><input name='item_origin' type='text' size='66' maxlength='100' placeholder='country origin'value='<?=$data["item_origin"]?>'></p>
  


<p>Price:<br><input name='item_price' type='text' size='66' maxlength='100' placeholder='Price'value='<?=$data["item_price"]?>'></p><br>

<p>Description:<br><textarea  name='item_desc'  cols="230" rows="10"  placeholder='description'> <?=$data["item_desc"]?></textarea></p><br>


    <input type='submit' name='submit' value='edit'><br>
	
	</form> 

	<form action='salesdelete_action.php?id=<?=$item_id?>'' method='post' >
    <input type='submit' name='delete' value='delete'>
</p></form>   

</div></div></div>

  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>
