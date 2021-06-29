<html>
<head>
<title>College login</title>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
<style>body{
    margin: 0;
    padding: 0;
    background: url(images/admin_login.jpg);
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
    
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    
    $sql="select * from college where Email='".$Email."'AND Password='".$Password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1)
    {
      header ("Location:manage.php");
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
            <p>E-Mail</p>
            <input type="Email" name="Email" placeholder="Enter Email Address" style="background: transparent;">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="admin_page.php">ADD NEW COLLEGE </a><br>
        </form>
        
    </div>

</body>
</head>
</html>