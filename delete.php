<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysqli_query($link,"delete from addd where id='$id'");
if($query1)
{
header('location:list.php');
}
}
?>
</body>
</html>