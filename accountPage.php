<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Account Page </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	 
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  

    	  <link rel= "stylesheet" href = "style.css">
	<style>


.row {
  display: flex;
}


.column {
  flex: 50%;
  padding: 10px;
 
}

card{
	
	height: auto;
}

	</style>
</head>

<body>


  <!-- logon -->
<?php 
session_start() ; 

include 'includes/sidebar.html';

$page_title = 'Home' ;
if ( isset( $_SESSION[ 'user_id' ] ) ) 
include 'includes/navbar.php';
else
include 'includes/navbar2.php';

?>
	<!--- contents --->
	<div class="containerPage" style="padding-left: 20px">
  <h2>Account Page</h2>

   <!-- column -->
   
    <!-- row 1 -->
   <div class="row">
   
    <!-- column 1 -->
  <div class="column" style="background-color:#aaa;">
	<div class="card" style="padding: 50px">	  
  
    <h3>Account Details</h3>
    <p>
		<ul style="background-color: white;">  
      <li>
        <a href="#">
		<span class="material-icons">payment</span>  Payment details
        </a>
      </li>
	  
      <li>
        <a href="#">
         <span class="material-icons">perm_identity</span>  Personal information
        </a>
      </li>
	  
      <li>
        <a href="#">
       <span class="material-icons">account_box</span>  Screen name
        </a>
      </li>
	  
      <li>
        <a href="#">
          <span class="material-icons">password</span>  Password
        </a>
      </li>
	    	         
    </ul>
		</div>
	
	
	</p>
  </div>
   <!-- row 1 column 2 -->
  <div class="column" style="background-color:#aaa;">
	<div class="card" style="padding: 50px">	  
  
    <h3>Buying</h3>
    <p>
			<ul style="background-color: white;">  	  
      <li>
        <a href="#">
		<span class="material-icons">notifications</span> Alerts
        </a>
      </li>
	  
      <li>
        <a href="ordersmy.php">
       <span class="material-icons">shopping_basket</span> Orders
        </a>
      </li>
	  
    <li>
        <a href="#">
       <span class="material-icons">comment</span> Feedback
        </a>
      </li>
	   <br> 	         
    </ul>
		</div>
	
	
	</p>
  </div></div>
   <!-- row 2 -->
   <div class="row">
    <!-- column 1 -->
  <div class="column" style="background-color:#aaa;">

		<div class="card" style="padding: 50px">	  
     
    <h3>Paperweight Wiki</h3>
    <p>		<ul style="background-color: white;">  
			  
      <li>
        <a href="wiki_homeuser.php">
         <span class="material-icons">view_list</span> View my articles
        </a>
      </li>  
	  
     <li>
        <a href="post2.php">
		<span class="material-icons">add</span> Make a new entry
        </a>
      </li>
	  
      <li>
        <a href="wiki_homeuser.php">
         <span class="material-icons">edit</span> Edit or delete an existing entry
        </a>
      </li>
	  
    	         
    </ul>
		</div>
	
	  </div>
  
   <!-- row 2 column 2 -->
  <div class="column" style="background-color:#aaa;">
  
  	
		<div class="card" style="padding: 50px">	  
  
    <h3>Selling</h3>
    <p>		<ul style="background-color: white;">  
		  
      <li>
        <a href="productsforsale.php">
		<span class="material-icons">sell</span> View items I'm selling
        </a>
      </li>
	  
      <li>
        <a href="newsale.php">
         <span class="material-icons">add</span> Sell a new item
        </a>
      </li>
	  
      <li>
        <a href="productsforsale.php">
       <span class="material-icons">edit</span> Edit or delete existing sales 
        </a>
      </li>
	  
       
    </ul>
		</div></div>
	
	
  </div>
</div>




  	<div class="footer"><h5>
	<div id="myFooter"></div></div>
	</h5>
  
	<!-- run the footer script -->	
	<script src="scripts/footer.js"></script>
</body>