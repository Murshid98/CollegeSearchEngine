<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete</title>
</head>
<body>
	<center>

<?php
$con= mysqli_connect("localhost" ,"root","12345" , "collegelist" );
if (!$con) 
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM college where id=".$_GET['id']);
?>
<script>
alert('Category successfully Deleted : (')
window.location.href = "manage.php";
</script>
<?php
?>	
	</center>


<center>

<?php
$con= mysqli_connect("localhost" ,"root","12345" , "collegelist" );
if (!$con) 
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM course where course=".$_GET['course']);
?>
<script>
alert('Category successfully Deleted : (')
window.location.href = "manage.php";
</script>
<?php
?>	
	</center>


</body>
</html>