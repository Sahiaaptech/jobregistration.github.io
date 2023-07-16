<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("location:signin.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <?php
  include 'links.php';
  include 'connection.php';
  if(isset($_POST['submit']))
  {
    $n = $_POST['Name']; 
    $d = $_POST['Degree']; 
    $m = $_POST['Mobile']; 
    $e = $_POST['Email']; 
    $r = $_POST['Reference']; 
    $j = $_POST['Job']; 
    $pic = $_FILES['Photo'];
    $filename = $pic['name'];
    $filepath = $pic['tmp_name'];
    $fileerror = $pic['error'];

    $file_ext = explode('.',$filename);
    $file_ext_check = strtolower(end($file_ext));
    $valid_file_ext = array('jpg','png','jpeg');

    if($fileerror==0)
    {
      if(in_array($file_ext_check,$valid_file_ext))
      {
        $destfile = 'Upload/'.$filename;
        move_uploaded_file($filepath,$destfile);
        $insert = "INSERT INTO jobregistration(Name, Degree, Mobile, Email, Refer, Post,photo) VALUES ('$n','$d','$m','$e','$r','$j','$destfile')";
      $res = mysqli_query($con,$insert);
          if($res) {
              ?>
              <script>
                  alert("Record inserted successfully");
              </script>
              <?php
          }
          else
          {
              ?>
              <script>
                  alert("Record not inserted");
              </script>
              <?php
          }
      }
      else
      {
        ?>
        <script>
            alert("Ext is Invalid");
        </script>
        <?php
      }
      
    }
    

  }
  ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  
</head>

<body>
  <header>
    
    <button class="btn btn-success">Welcome <?php echo $_SESSION['name'] ?></button>
    
    
    <a class="btn btn-success text-end" href="logout.php">Logout</a>
    
    
  </header>
  <main class = "container mt-5">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="Name">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Degree</label>
          <input type="text" class="form-control" name="Degree">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Mobile</label>
          <input type="text" class="form-control" name="Mobile">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="text" class="form-control" name="Email">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Reference</label>
          <input type="text" class="form-control" name="Reference">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Job Post</label>
          <input type="text" class="form-control" name="Job">    
        </div>
      
        <div class="mb-3">
          <label for="" class="form-label">Profile Pic</label>
          <input type="file" class="form-control" name="Photo">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Upload CV</label>
          <input type="file" class="form-control" name="filing">    
        </div>
        <div class="mb-3">
          <input type="submit" class="btn btn-info" name="submit">    
        </div>

    </form>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->

</body>

</html>
