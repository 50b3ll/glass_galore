<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>delete article</title>
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
            color:  #006666;
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

$page_title = 'Home' ;
if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

require ( 'connect_db.php' ) ;

if (isset($_REQUEST['article_id']))

$item_id=$_REQUEST ['article_id'];
$article_id=$_REQUEST ['id'];
$q = "SELECT * 
FROM wiki JOIN users ON (wiki.edited_by = users.user_id)
WHERE article_id=$article_id";

$r =mysqli_query ($dbc, $q);

$data =$r->fetch_assoc();
#print_r($data);

?>  

<div class="column2" >  
  	<div class="containerPage" style="height:800px">
    <h1>are you sure you want to delete this article?</h1><br>

	  <form action='delete_action.php?id=<?=$article_id?>'' method='post' >


    <input type='submit' name='submit' value='delete'>


</p></form>    

</div></div></div>
  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>
