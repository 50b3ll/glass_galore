
<?php 
$page_title = 'Register' ;

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{

  require ('connect_db.php'); 
  
  $errors = array();

  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name<br>' ; }
  else
  { $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'first_name' ] ) ) ; }

  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name<br>' ; }
  else
  { $ln = mysqli_real_escape_string( $dbc, trim( $_POST[ 'last_name' ] ) ) ; }

  if (empty( $_POST[ 'username' ] ) )
  { $errors[] = 'Enter a username<br>' ; }
  else
  { $us = mysqli_real_escape_string( $dbc, trim( $_POST[ 'username' ] ) ) ; }

  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address<br>'; }
  else
  { $e = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ; }

  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match<br>' ; }
    else
    { $p = mysqli_real_escape_string( $dbc, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password<br>' ; }
  
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM users WHERE email='$e'" ;
    $r = @mysqli_query ( $dbc, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] =
     'Email address already registered <a href="register4.php">please login</a>';
  }  
  
  if ( empty( $errors ) ) 
 {
    $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date, username) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW(), '$us' )";
    $r = @mysqli_query ( $dbc, $q ) ;
    if ($r)
    { require ( 'regSuc.php' ) ;
}

    mysqli_close($dbc); 

    exit();
  }

  else 
  {
include 'blank3.php';

  }  
}

?>  



