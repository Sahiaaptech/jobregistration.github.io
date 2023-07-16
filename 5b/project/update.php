<?php
                include 'links.php';
                include 'connection.php';
                $ids = $_GET['id'];
                $showquery = "select * from jobregistration where id = {$ids}";
                $showdata= mysqli_query($con,$showquery);
                $arrydata = mysqli_fetch_array($showdata);
                if(isset($_POST['Update']))
                {
                    $idupdate = $_GET['id'];
                    $n = $_POST['Name']; 
                    $d = $_POST['Degree']; 
                    $m = $_POST['Mobile']; 
                    $e = $_POST['Email']; 
                    $r = $_POST['Reference']; 
                    $j = $_POST['Job']; 
                    
                    $update = "UPDATE jobregistration SET id=$idupdate,Name='$n',Degree='$d',Mobile=$m,Email='$e',Refer='$r',`Post`='$j' WHERE id=$idupdate";
                    $res = mysqli_query($con,$update);
                    if($res) {
                        ?>
                        <script>
                            alert("Record updated successfully");
                            // location.replace("display.php");
                        </script>
                        <?php
                    }
                    else
                    {
                        ?>
                        <script>
                            alert("Record not updated");
                        </script>
                        <?php
                    }

                }
                ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

  <main class = "container mt-5">
    <form action="" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="Name"  value="<?php echo $arrydata['Name'] ?>">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Degree</label>
          <input type="text" class="form-control" name="Degree" value="<?php echo $arrydata['Degree'] ?>">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Mobile</label>
          <input type="text" class="form-control" name="Mobile" value="<?php echo $arrydata['Mobile'] ?>">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="text" class="form-control" name="Email" value="<?php echo $arrydata['Email'] ?>">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Reference</label>
          <input type="text" class="form-control" name="Reference" value="<?php echo $arrydata['Refer'] ?>">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Job Post</label>
          <input type="text" class="form-control" name="Job" value="<?php echo $arrydata['Post'] ?>">    
        </div>
        <div class="mb-3">

          <input type="submit" class="btn btn-info" name="Update" value="Update Record">    
        </div>

    </form>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->

</body>

</html>
