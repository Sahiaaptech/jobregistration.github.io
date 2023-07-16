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
        
        <input type="text" class="form-control" id="search" name="search">
    
    </div>
    <div class="container" id="tbody">

    </div>
    <script>
      $(document).ready(function(){
            $('[data-bs-toggle="tooltip"]').tooltip();
            $('#search').on("keyup",function(){
                var s = $(this).val();
                $.ajax({
                    url:"livesearch.php",
                    type:"POST",
                    data:{srch:s},
                    success:function(data){
                        $('#tbody').html(data);
                    }
                });

            });
        });
    </script>
</body>
</html>