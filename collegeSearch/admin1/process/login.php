<?php  
$host="localhost";
$user="root";
$password="12345";
$db="collegelist";
 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
 
if(isset($_POST['login'])){
    
    $Email=$_POST['name'];
    $Password=$_POST['password'];
    
    $sql="select * from college where Email='".$Email."'AND Password='".$Password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1)
    {
      header ("Location:../home.php");
    }
    else{
        header ("Location:../index.php");
    }
        
}
?>