<?php 
$user = 'root';
$pwd = '';
$server = 'localhost';
$db = 'crud';
$con = mysqli_connect($server,$user,$pwd,$db);
if($con){
    ?>
    <!-- <script>
        alert("Connection success");
    </script> -->
    <?php
}
else
{
    die("No connection ".mysqli_connect_error());
}
?>