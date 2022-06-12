<?php 


session_start();

require ( 'login_tools.php' ) ;

    require ( 'connect_db.php' ) ;

if ( !isset( $_SESSION[ 'user_id' ] ) ) { load() ; }

$page_title = 'wiki action' ;

include 'connect_db.php';
$statusMsg = '';

	$firstname = $_SESSION['first_name'];
	$lastname =  $_SESSION['last_name'];
	$username = $_SESSION ['username'];
	$user_id = $_SESSION ['user_id'];
	
	$name_maker = $_POST ['name_maker'];
	$style = $_POST ['style'];	
	$intro = $_POST ['intro'];
	$description = $_POST ['description'];
	$type = $_POST ['type'];
	$era = $_POST['era'];
	$history = $_POST['history'];
	$prices_info = $_POST['prices_info'];



// File upload path
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
		
		 // if( !empty($_POST['name_maker']) &&  !empty($_POST['intro']) )
		
		{
            // Insert image file name into database
            $insert = $dbc->query("INSERT into wiki (username,name_maker,style,type,history,prices_info,intro,description,edited_by,article_img, uploaded_on) 
			VALUES ('$username','$name_maker','$style','$type','$history','$prices_info','$intro','$description',$user_id,'".$targetFilePath."', NOW())");
			
			         // $q = "INSERT INTO wiki(username,name_maker,style,type,era,history,prices_info,intro,description) 
          //VALUES ('$username','$name_maker','$style','$type','$era','$history','$prices_info','$intro','$description' )";
          //$r = mysqli_query ( $dbc, $q ) ;
			
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
  if ( empty($_POST['maker_name'] ) )
  { echo '<img src ="images/problem.png"><br><h4>Please enter a mn</h4>'; }
  if ( empty($_POST['intro'] ) )
  { echo '<h4>Please enter a i for this post.</h4>'; }

  # On success add post to forum database.
  //if( !empty($_POST['name_maker']) &&  !empty($_POST['intro']) )
  //{

    //  {
        
        //  $q = "INSERT INTO wiki(username,name_maker,style,article_img,type,era,history,prices_info,intro,description,post_date) 
        //  VALUES ('$username','$name_maker','$style','$article_img','$type','$era','$history','$prices_info','$intro','$description',NOW() )";
         // $r = mysqli_query ( $dbc, $q ) ;
  //}


   # Report error on failure.
    if (mysqli_affected_rows($dbc) != 1) { echo '<p>Error</p>'.mysqli_error($dbc); } else { load('wiki_home.php'); }

      # Execute inserting into 'forum' database table.
    # Close database connection.
    mysqli_close( $dbc ) ; 
    }
// }

// Display status message
echo $statusMsg;






# Check form submitted.


# Create a hyperlink back to the forum page.
echo '<div class="sspace"><button onclick="goBack()" class="button">Go Back</button></div>



<script>
function goBack() {
  window.history.back();
}
</script>';



?>