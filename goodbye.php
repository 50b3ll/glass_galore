<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>logged out </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  
  
    	  <link rel= "stylesheet" href = "style.css">
	
</head>

<body>
    <div class="container-fluid">
  <?php 

  include 'includes/sidebar.html';
session_start() ; 

# Clear existing variables.
$_SESSION = array() ;
include 'includes/navbar2.php';
# Destroy the session.
session_destroy() ;

?>
<div class="column2" ><div class="containerPage">
 <style="margin-left:400px"class="container-fluid">

<img src="images/goodbye2.png"> <br> <br>
<h5 style="margin-left:100px" ><a href="register4.php" class="button1" style="margin-bottom:100px">Login</a>	</br></br></br>

<style="margin-left:100px"><button onclick="goBack()" class="button1">Go Back</button></h5>

</div>
</div>

<script>
function goBack() {
  window.history.back();
}
</script>'



<div class="footer" style="margin-top:600px"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
  


	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script></div>
</body>