<?php 

$con=mysqli_connect("localhost","id11512766_root","vishnuroad");
if(!$con)
{
    die('could not connect'.mysqli_error());
    
}
mysqli_select_db ($con,"id11512766_logintest");
?>