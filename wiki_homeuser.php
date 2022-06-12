<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>wiki home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">


  
	<style>
.card3 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  background-color:whitesmoke;  
  width: 150px;
  height: 140px; 
  padding:10px; 
  margin:25px;
  color:black !important;	
  text-decoration:none; 
  text-align:center;
}
.card3:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


.container2 {
  padding: 2px 16px;
   display: inline-block;
   background-color:white;   width:auto;  
}

img.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto }
	
	.img-display{
		width: 150px; height:150px;
		    margin-left: 15px;

	}	
	
		.img-display2{
		width: 50px; height50px;
		    margin-left: 8px;
	}
	
.containerPage{
	background-color:white;
  padding: 5px;
	border-radius: 5px !important;
	margin:0px;
	}
    </style>
	
</head>

<body>
    <!-- top banner -->	 
<?php 
session_start() ; 
include 'includes/sidebar.html';

if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

?>
   <!-- column -->

  <div class="column2" >
  
  	<div class="containerPage">
  <h3>My Paperweight Articles</h3>
          <a href="post2.php">
		<span class="material-icons">add</span> Make a new entry
        </a><br>

<?php 
	$user_id = $_SESSION ['user_id'];

require ( 'connect_db.php' ) ;

    $q = "SELECT * FROM wiki WHERE edited_by=$user_id";

$r = mysqli_query( $dbc, $q ) ;


if ( mysqli_num_rows( $r ) > 0 )
{
    while ( $row = mysqli_fetch_array( $r,MYSQLI_ASSOC ))
    {
        extract($row);
        echo "    
		<div class='container2' >
		<div class='col'>
		<div class ='card3' > 
    
        <a href='wiki_artuser.php?id=$article_id'>
        <img  class='img-display2' src= '$article_img'/>
		   		      
        <br>$name_maker
        <br>$style</a>     
			
</div></div></div>"

        ;
    }

    # Close database connection.
    mysqli_close( $dbc ) ;
}
# Or display message.
 {

    ; }

?>

</div></div>

</div>

    	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>