<?php

    include('config.php');
    $DeleteData=$_GET['Delete'];

    $Delete_Query="DELETE FROM `schedules` WHERE schedule_id='$DeleteData'";
    $Execute=mysqli_query($link,$Delete_Query);
    
    if($Execute){
    header("location:view.php");
}
else{
	echo'<script>window.open("view.php?Deleted=Opps!!!! something wrong!!","_self")</script>';
}
?>