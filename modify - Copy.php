
<!DOCTYPE html>


<?php	

$dbc = mysqli_connect("localhost", "root", "", "new_db") 
OR die(mysqli_connect_error());

mysqli_set_charset( $dbc, 'utf8' ) ;


$sql = "UPDATE wiki SET name_maker='Doe' WHERE article_id=12";
		   

	if ($dbc->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $dbc->error;
}	




	


?>