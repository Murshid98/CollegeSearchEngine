<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/admin_add.css">
<title>Add Course</title>
<style>
body{background:url(images/);}
 .low input[type="text"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #040404;
    font-size: 16px;
 }</style>

</head>

<body background="">


<?php
if(isset($_POST['save'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){


        $conn=  mysqli_connect("localhost", "root", "12345", "collegelist");

        if(!$conn)
       {
           die('not connected');
       } 		
      

  
   $sql = "INSERT INTO course(college_name,course)
      VALUES ('".$_SESSION["id"]."','".$_POST["college_name"]."','".$selected."')";


    $result = mysqli_query($conn,$sql);
    
   

echo $selected."</br>";
}
}
}
?>



&nbsp;&nbsp;&nbsp;&nbsp;<a href="manage.php" type="submit" name="save"><BUTTON>View Details</BUTTON></a>








<h2>Alter Details</h2>
<div class="low">
  <div class="col-75">
    <div class="container">

      <form action="" class="form" method="post"> 

        <div class="low">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Name Of College</label>
            <input type="text" id=" " name="college_name" placeholder="Enter Your College Name" required>
            
            
  

<h2>Courses</h2><br>

<input type="checkbox" name="check_list[]" value="BA">BA<br>
<input type="checkbox" name="check_list[]" value="BSC">BSC<br>
<input type="checkbox" name="check_list[]" value="BCOM">BCOM<br>
<input type="checkbox" name="check_list[]" value="MA">MA <br>
<input type="checkbox" name="check_list[]" value="MSC">MSC<br>
<input type="checkbox" name="check_list[]" value="MCOM">MCOM <br>
<br>
           
         
      
       <input type="submit" value="ADD COURSE" class="btn" name="save">
      
       <?php
       //header("Result.php");
      ?>
    </div>
  </div>

</form>
</center>
<script type="text/javascript" src="js/admin-add.js"></script>
</body>
</html>