<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1><u>College Detail</u></h1><br>    
        <?php
        $conn=  mysqli_connect("localhost", "root", "12345", "collegelist");

        if(!$conn)
        {
           die('not connected');
        }
            $conn=  mysqli_query($conn, "select * from college");

        ?>
 
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>ID</th>
                <th>College Name</th>
                <th>District</th>
                <th>University</th>
                <th>phone</th>
                <th>Email</th>
                <th>College Link</th>
                <th>University Link</th>
                <th>Password</th>
              </tr>
            </thead>

            <?php
             while($row=  mysqli_fetch_array($conn))
             {
            ?>

            <tbody>
             <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['college_name']; ?></td>
                <td><?php echo $row['District']; ?></td>
                <td><?php echo $row['University']; ?></td>
                <td><?php echo $row['phone'] ;?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['weblink']; ?></td>
                <td><?php echo $row['university_link'] ;?></td>
                <td><?php echo $row['Password'] ;?></td>
                <td><?php echo "<a href='deletecollege.php?id=".$row['id']."'><button>DELETE</button></a>"; ?></td>
            </tr>
            <?php
             }
            ?>
        </tbody>
    </table>
</div>


<div class="container">
  <h1><u>Course Detail</u></h1><br>    
        <?php
        $conn=  mysqli_connect("localhost", "root", "12345", "collegelist");

        if(!$conn)
        {
           die('not connected');
        }
            $conn=  mysqli_query($conn, "select * from course");

        ?>
 
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>College name</th>
                <th>course</th>
            </thead>

            <?php
             while($row=  mysqli_fetch_array($conn))
             {
            ?>

            <tbody>
             <tr>
                <td><?php echo $row['college_name']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo "<a href='coursedelete.php?course=".$row['course']."'><button>DELETE</button></a>"; ?></td>
            </tr>
            <?php
             }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

