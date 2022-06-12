<!DOCTYPE html>
<html>
<head>
    <style>

h4 {
margin-left: 50px;
color: red;
font-family: sans-serif;
font-size: 16px;
}
h5{            color: #006666 ;
font-family: sans-serif;
font-size: 16px;
margin-left: 50px;
}



.center4{
    margin-left: 600px;
}
    </style>
</head>

<?php 


function load( $page = 'error2.php' )
{

  $url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . dirname( $_SERVER['REQUEST_URI']) ;
  
  $Url = $_SERVER['REQUEST_URI'];
  $parts = parse_url($url);
  
  
  $newUrl = $parts['scheme'] . '://' . $parts['host'] . $parts['path'] . '/' . $page;;
   
  header( "Location: $newUrl" ) ; 
  exit() ;
}

 
function validate( $dbc, $email = '', $pwd = '')
{

  $errors = array() ; 


  if ( empty( $email ) ) 
  { $errors[] = "<div class='center4'><h4> Please enter your email address </h4></div>"; }
  else  { $e = mysqli_real_escape_string( $dbc, trim( $email ) ) ; }


  if ( empty( $pwd ) ) 
  { $errors[] = "<div class='center4'><h4>Please enter your password</h4></div>" ; }
  else { $p = mysqli_real_escape_string( $dbc, trim( $pwd ) ) ; }

  if ( empty( $errors ) ) 
  {
    $q = "SELECT user_id, first_name, last_name, username FROM users WHERE email='$e' AND pass=SHA1('$p')" ;  
    $r = mysqli_query ( $dbc, $q ) ;
    if ( @mysqli_num_rows( $r ) == 1 ) 
    {
      $row = mysqli_fetch_array ( $r, MYSQLI_ASSOC ) ;
      return array( true, $row ) ; 
    }

    else { $errors[] = '<div class="center4"><h4>Email address and password not found</h4></div>' ; }
  }

  return array( false, $errors ) ; 
}