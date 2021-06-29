<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/admin_add.css">
<title>Registration Page</title>
<style>
body{background:url(images/add_page_img.jpg);}
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
      VALUES ('".$_POST["college_name"]."','".$selected."')";


    $result = mysqli_query($conn,$sql);
    
   

"</br>";
}
}
}
?>


<?php
        $conn=  mysqli_connect("localhost", "root", "12345", "collegelist");

        if(!$conn)
       {
           die('not connected');
       } 		
      

  if(isset($_POST['save']))
{
   $sql = "INSERT INTO college(college_name,District,University,phone,email,weblink,university_link,Password)
      VALUES ('".$_POST["college_name"]."','".$_POST["District"]."','".$_POST["University"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["weblink"]."','".$_POST["university_link"]."','".$_POST["Password"]."')";


    $result = mysqli_query($conn,$sql);
    ?>
    <script type="text/javascript">
      alert('College Has Been Successfully Added');
      </script>
    <?php

	
	?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="manage.php" type="submit" name="save"><BUTTON>View Colleges</BUTTON></a>
	 <?php
}


?>







<h2>Alter Details</h2>
<div class="low">
  <div class="col-75">
    <div class="container">

      <form action="" class="form" method="post"> 

        <div class="low">
          <div class="col-50">
            <h3>Add New College Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Name Of College</label>
            <input type="text" id=" " name="college_name" placeholder="Enter Your College Name" required>
            
            


<div class="custom-select" style="width:200px;">
            District
  <select name="District" required >
    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    <option value="Kollam">Kollam</option>
    <option value="Pathanamthitta">Pathanamthitta</option>
    <option value="Alappuzha">Alappuzha</option>
    <option value="Kottayam">Kottayam</option>
    <option value="Idukki">Idukki</option>
    <option value="Eranakulam">Eranakulam</option>
    <option value="Thrissur">Thrissur</option>
     <option value="Palakkad">Palakkad</option>
    <option value="Malappuram">Malappuram</option>
    <option value="Kozhikode">Kozhikode</option>
    <option value="Wayanad">Wayanad</option>
    <option value="Kannur">Kannur</option>
    <option value="Kasaragod">Kasaragod</option>
  </select><p></p>
</div>


  <div class="custom-select" style="width:200px;" >
            University &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <select name="University" required>
    <option value="University of Kerala">University of Kerala</option>
    <option value="University of Calicut">University of Calicut</option>
    <option value="APJ Abdul Kalam Technological University">APJ Abdul Kalam Technological University</option>
    <option value="Kannur University">Kannur University</option>
    <option value="Cochin University of Science and Technology">Cochin University of Science and Technology</option>
    <option value="Kerala University of Health Sciences">Kerala University of Health Sciences</option>
    <option value="Kerala Agricultural University">Kerala Agricultural University</option>
    <option value="Kerala Kalamandalam Deemed University of Art and Culture">Kerala Kalamandalam Deemed University of Art and Culture</option>
     <option value="Central University of Kerala">Central University of Kerala</option>
    <option value="Kerala University of Fisheries and Ocean Studies">Kerala University of Fisheries and Ocean Studies</option>
    <option value="Sree Sankaracharya University of Sanskrith">Sree Sankaracharya University of Sanskrith</option>
    <option value="National University of Advanced Legal Studies">National University of Advanced Legal Studies</option>
    <option value="Mahatma Gandhi University">Mahatma Gandhi University</option>
  </select><p></p>
</div>
<br>
<hr><br>
<h2>Courses Offered</h2><br>

<input type="checkbox" name="check_list[]" value="BA">BA<br>
<input type="checkbox" name="check_list[]" value="BSC">BSC<br>
<input type="checkbox" name="check_list[]" value="BCOM">BCOM<br>
<input type="checkbox" name="check_list[]" value="MA">MA <br>
<input type="checkbox" name="check_list[]" value="MSC">MSC<br>
<input type="checkbox" name="check_list[]" value="MCOM">MCOM <br>
<br>
<br>
<label for="adr">Other Informations (Phone Number,email,etc)</label>
            <i class="fa fa-phone"></i><input type="text" id="adr" name="phone" placeholder="Phone number" required>

            <label for="email"><i class="fa fa-envelope"></i></label>
            <input type="text" id="email" name="email" placeholder="College e-mail" required>

            <label for="city"><i class="fa fa-college"></i> College Web Page Link</label>
            <input type="text" id="city" name="weblink" placeholder="College Link" required>

            <label for="cname">University web page link</label>
            <input type="text" id="cname" name="university_link" placeholder="University Link" required>
            
             <label for="password">Enter your password</label>
            <input type="Password" id="password" name="Password" placeholder="Enter Password" required>
              <label for="cpassword">Confirm password</label>
            <input type="Password" id="password" name="cpassword" placeholder="Enter Password again" required>
            <hr>
           
         
      
       <input type="submit" value="ADD COLLEGE DETAILS" class="btn" name="save">
      
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