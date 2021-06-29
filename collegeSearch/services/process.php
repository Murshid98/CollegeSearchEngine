<?php 
if(isset($_POST['login'])){
    $query = "SELECT * FROM signup WHERE email='".$_POST['email']."' AND password = '".$_POST['password']."' ";		
    $sql = $db->query($query);
    $n = $sql->num_rows;
    if($n > 0){
      while($row = $sql->fetch_assoc()) {
        $_SESSION["id"] =  $row["id"];
        $_SESSION["name"] =  $row["name"];
        $_SESSION["mobile"] =  $row["mobile"];
        $_SESSION["email"] =  $row["email"];
    }
     header("Location:./../profile_view.php");
    } else {
        $_SESSION['message'] = "login faild";
        header("Location:./../signin.php");
    }
    
}
 ?>