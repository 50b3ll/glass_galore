<?php
$r = mysqli_query( $dbc, $q ) ;


if ( mysqli_num_rows( $r ) > 0 )
{


    while ( $row = mysqli_fetch_array( $r,MYSQLI_ASSOC ))
    {
        extract($row);
        echo "    <div class='container2' >

  <div class='col'><div class ='card2' > 
    
        <a href='detail.php?id=$item_id'>
        <img  class='img-display' src= '$item_img'/>
		
     		<a href='detail.php?id=$item_id'>        
        <br>$item_name
        <br>$style<br><br>
				
		<b>&pound;$item_price</b></a>
 <a href='added.php?id=$item_id' class='add-btn'>Add</a>
</div></div></div>";
    }

    mysqli_close( $dbc ) ;
}

else {
    echo
        "<div class = 'center4'><img src='images/noproducts.png'></div>
        
        <div class = 'center5'><a href='productslist.php' class='button'>Back to shop</a>
        </div>"
    ; }

?>