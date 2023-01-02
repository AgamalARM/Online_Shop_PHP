<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <h2>Online Shopping site</h2>
                <img src="logo.png" alt="logo" width="450px"><br>
                <!-- <label class='pn'>Product name:</label> -->
                <input type="text" name="name"><br>
                <!-- <label class='pp'>Product price:</label> -->
                <input type="text" name="price"><br>
                <input type="file" id="file" name="image" style="display:none;">
                <label for="file">choose image</label>
                <input type="submit" name="upload" class="submit">
                <!-- <button name="upload">upload product</button> -->
                <br><br>
                <a href="products.php">Display All the Products</a>


            </form>
        </div>
        <p>Developer by Ahmed Gamal</p>
    </center>
</body>

</html>