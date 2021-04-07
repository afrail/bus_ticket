<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$query3=mysqli_query($link,"update addd set name='$name', age='$age' where id='$id'");
if($query3)
{
header('location:list.php');
}
}
$query1=mysqli_query($link,"select * from addd where id='$id'");
$query2=mysqli_fetch_array($query1, MYSQLI_ASSOC);
?>
<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
Age:<input type="text" name="age" value="<?php echo $query2['age']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>