<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include 'connection.php';
    include 'links.php';
    ?>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-success">List of Candidates</h1>
        <a href="display3.php"><button class="btn btn-danger">Download Report</button></a>
        <div class="table-responsive">
            <table class="table bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Degree</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Reference</th>
                        <th>Job Post</th>
                        <th>DP</th>
                        <th colspan="2">Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $selectquery = 'select * from jobregistration';
                    $q = mysqli_query($con,$selectquery);
                    $num = mysqli_num_rows($q);
                    
                    while($res = mysqli_fetch_array($q))
                    {
                       ?>
                    <tr >
                        <td><?php echo  $res['id']?></td>
                        <td><?php echo  $res['Name']?></td>
                        <td><?php echo  $res['Degree']?></td>
                        <td><?php echo  $res['Mobile']?></td>
                        <td><?php echo  $res['Email']?></td>
                        <td><?php echo  $res['Refer']?></td>
                        <td><?php echo  $res['Post']?></td>
                        <td><img src="<?php echo  $res['photo']?>" alt="" width="200" height="200"></td>
                        <td class="text-primary"><a href="update.php?id=<?php echo  $res['id']?> " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update"><i class="fa fa-edit"></i></a></td>
                        <td class="text-danger"><a href="delete.php?id=<?php echo  $res['id']?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a></td>
                    </tr>
                       <?php
                    }
                    ?>
                  

                </tbody>
            </table>
        </div>

    </div>
    <script>
      $(document).ready(function(){
            $('[data-bs-toggle="tooltip"]').tooltip();
                   });
    </script>
</body>
</html>