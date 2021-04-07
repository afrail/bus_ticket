<?php
//$query=mysql_connect("localhost","root","");
//mysql_select_db("formdb",$query);
$link = mysqli_connect("localhost", "root", "", "onlineticket");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>