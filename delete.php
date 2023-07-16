<?php 
  include 'connection.php';
  $id = $_GET['id'];
  $dlt = "delete from jobregistration where id =  $id";
  $q = mysqli_query($con,$dlt);
  header('location:display.php');
?>