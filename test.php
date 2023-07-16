<?php
if(isset($_POST['Submit']))
{
    $pic = $_FILES['Photo'];
    print_r($pic);
  //  echo $pic;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="Photo"> <br>
    <input type="submit" name="Submit">
    </form>
    
</body>
</html>