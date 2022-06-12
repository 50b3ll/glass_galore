<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>My wiki articles</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  
<link rel="shortcut icon" href="#">
    	  <link rel= "stylesheet" href = "style.css">

</head>

<body>
<?php 
include 'includes/sidebar.html';
session_start() ; 

if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

require ( 'connect_db.php' ) ;

if (isset($_REQUEST['id']))
{
$article_id=$_REQUEST ['id'];

$q = "SELECT * 
FROM wiki JOIN users ON (wiki.edited_by = users.user_id)
WHERE article_id=$article_id";

$r =mysqli_query ($dbc, $q);

if($r){
while ($row=mysqli_fetch_array ($r, MYSQLI_ASSOC))
{
    extract ($row);

        echo "
		<div class ='container2' style='margin-left:50px'>
		<h2>$name_maker - $style</h2>
		<img class='img-display' src= '$article_img'/>
        <p><b>Make: </b>$name_maker<br>
        <br><b> Style: </b>$style<br>
		<br><b> Era: </b>$era<br>
        <br><b>Introduction: </b>   $intro<br>
        <br><b>Description: </b>$description<br>
        <br><b>History: </b> $history<br>
        <br><b>Prices information: </b>$prices_info<br>
        <br><b> Edited by: </b>	 $username
        </p>
     
     	Are any for sale? <br>
		<div class='btn-group'> 
		<a class='login-btn' href='./edit.php?id= ".$row['article_id']."'>Edit</a><br>
		<a class='login-btn' href='./delete.php?id= ".$row['article_id']."'>Delete</a>
		
		
</div></div>
";
}

}

}

?>

</div>

  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>
