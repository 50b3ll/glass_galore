<?php 

require ( 'connect_db.php' ) ;

$isSorted = false;
$direction = "ASC";

if (isset ($_POST['sortChooser']))
{
    $isSorted=true;
    extract ($_POST);
    if ($sortChooser=="prices high to low")
    {
        $sortby="item_price";
        $direction="DESC";
    }

    if ($sortChooser=="prices low to high")
    {
        $sortby="item_price";
        $direction="ASC";
    }

    if ($sortChooser=="name a-z")
    {
        $sortby="item_name";
        $direction="ASC";
    }

    if ($sortChooser=="name z-a")
    {
        $sortby="item_name";
        $direction="DESC";
    }
}

if (isset ($_GET ['sortby']))
{
    $sortby = $_GET['sortby'];
    $isSorted = true;
}
if (isset ($_GET ['direction'])) $direction = $_GET['direction'];

if ($isSorted)
{
    $q="SELECT * FROM shop ORDER BY $sortby $direction";
}

else
{
    $q = "SELECT * FROM shop" ;
}

if (isset ($_POST['search']))
{
    extract ($_POST);
    $q="SELECT * from shop 
WHERE item_desc LIKE '%$search%'
OR item_name LIKE '%$search%'
OR style LIKE '%$search%'
OR item_origin LIKE '%$search%'";
}
?>