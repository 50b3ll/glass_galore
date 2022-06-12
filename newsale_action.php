<?php 

session_start();

require ( 'login_tools.php' ) ;

    require ( 'connect_db.php' ) ;

if ( !isset( $_SESSION[ 'user_id' ] ) ) { load() ; }


include 'connect_db.php';
$statusMsg = '';

	$firstname = $_SESSION['first_name'];
	$lastname =  $_SESSION['last_name'];
	$username = $_SESSION ['username'];
	$user_id = $_SESSION ['user_id'];
	
	$item_name = $_POST ['item_name'];	
	$style = $_POST ['style'];
	$type = $_POST ['type'];
	$item_origin = $_POST ['item_origin'];
	$item_price = $_POST['item_price'];	
	$item_desc = $_POST ['item_desc'];

// File upload path
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
		
		 // if( !empty($_POST['name_maker']) &&  !empty($_POST['intro']) )
		
		{
            // Insert image file name into database
            $insert = $dbc->query("INSERT into shop (item_name,style,type,item_origin,item_price,item_desc,seller_id,item_img) 
			VALUES ('$item_name','$style','$type','$item_origin','$item_price','$item_desc',$user_id,'".$targetFilePath."')");
			

			
            if($insert){
                $statusMsg = "The file ".$targetFilePath. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
			
			
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  # Check Subject and Message Input.
  if ( empty($_POST['item_name'] ) )
  { echo '<img src ="images/problem.png"><br><h4>Please enter a mn</h4>'; }
  if ( empty($_POST['item_desc'] ) )
  { echo '<h4>Please enter a description for this post.</h4>'; }

  # On success add post to forum database.
  //if( !empty($_POST['name_maker']) &&  !empty($_POST['intro']) )
  //{

    //  {
        
        //  $q = "INSERT INTO wiki(username,name_maker,style,article_img,type,era,history,prices_info,intro,description,post_date) 
        //  VALUES ('$username','$name_maker','$style','$article_img','$type','$era','$history','$prices_info','$intro','$description',NOW() )";
         // $r = mysqli_query ( $dbc, $q ) ;
  //}



    if (mysqli_affected_rows($dbc) != 1) { echo '<p>Error</p>'.mysqli_error($dbc); } else { load('productslist.php'); }


    # Close database connection.
    mysqli_close( $dbc ) ; 
    }
// }


echo $statusMsg;


echo '<div class="sspace"><button onclick="goBack()" class="button">Go Back</button></div>



<script>
function goBack() {
  window.history.back();
}
</script>';



?>