<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Update College</title>
</head>
<center>
<body>
<center>
<?php
$con=  mysqli_connect("localhost", "root", "12345", "collegelist");
if(!$con)
{
die('not connected');
}
$con=  mysqli_query($con, "select * from college where id=".$_GET['id']);
?>

<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "collegelist";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['update']))
{
$sql = "UPDATE college SET college_name= '".$_POST["college_name"]."', District='".$_POST["District"]."', University='".$_POST["University"]."',phone='".$_POST["phone"]."',email='".$_POST["email"]."',weblink='".$_POST["weblink"]."',university_link='".$_POST["university_link"]."' where id=".$_GET['id'];

if ($conn->query($sql) === TRUE) {
?>
<script type="text/javascript">
  alert('Record updated successfully')
  window.location.href = "manage.php";
</script>
<?php
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>
<center>
<form action="" method="post"> 
<?php
  while($row=  mysqli_fetch_array($con))
?>
        
<label id="first"> College Nam:</label><br/>
<input type="text" name="college_name" value="<?php echo $row['college_name']; ?>"><br/>
<label id="first">District</label><br/>
<input type="text" name="District" value="<?php echo $row['District']; ?>"><br/>
<label id="first">University</label><br/>
<input type="text" name="University" value="<?php echo $row['University']; ?>"><br/>
<label id="first">phone</label><br/>
<input type="number" name="phone" value="<?php echo $row['phone']; ?>"><br/>
<label id="first"> Email:</label><br/>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br/>
<label id="first"> Weblink:</label><br/>
<input type="text" name="weblink" value="<?php echo $row['weblink']; ?>"><br/>
<label id="first"> University Link:</label><br/>
<input type="text" name="university_link" value="<?php echo $row['university_link']; ?>"><br/>
<a href="updatecollege.php"><button type="submit" name="update">Update</button></a>
<?php
?> 
</form>
</center>
</body>
</html>