<html>
<head>
<title>Admin Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
<style>body{
    margin: 0;
    padding: 0;
    background: url(images/img3.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;</style>


</head>
<body>

<?php  
$host="localhost";
$user="root";
$password="12345";
$db="collegelist";
 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
 
if(isset($_POST['login'])){
    
    $Username=$_POST['Username'];
    $password=$_POST['password'];
    
    $sql="select * from admin_login where Username='".$Username."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1)
    {
      header ("Location:adminmanage.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
    <div class="loginbox">
    <img src="images/login_avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
        </form>
        
    </div>

</body>
</head>
</html>