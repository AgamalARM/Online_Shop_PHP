<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
        <h3>All Products </h3>
    </center>

    <?php
    include('config.php');

    $result = mysqli_query($con, "SELECT * FROM prod");
    while ($row = mysqli_fetch_array($result)) {

        echo "
            <center>
            <main>
               <div class='card' style='width: 18rem;'>
                 <img src='$row[image]' class='card-img-top'>
                 <div class='card-body'> 
                   <h5 class='card-title'>$row[name]</h5>
                   <p class='card-text'>$row[price]</p>
                   <a href='#' class='btn btn-primary'>Edite</a>
                   <a href='#' class='btn btn-danger'>Delete</a>
                 </div>
               </div>
    
        </main>
            </center>
        ";
    }

    ?>






</body>

</html>