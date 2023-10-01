<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <title>Gallery</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <header>
            <img src="IMG_7561.PNG" alt="logo">
            <h1>Photo Gallery</h1>
            <div>
                <a href="index.php"><i class="fa fa-bars"></i></a>
            </div>
        </header>
        <div id="main">
            <div>
                <h2>You also can add piece of art to our gallery..</h2>
            </div>
            <div class="container">
                <div class="picture"><img src="photos/art-6260031.jpg" alt="#"></div>
                <div class="picture"><img src="photos/fine-art.png" alt="#"></div>
                <div class="picture"><img src="photos/unnamed.jpg" alt="#"></div>
            </div>
            <form name="mod" action="php/addphoto.php" method="post" enctype="multipart/form-data">
                <label>Add some art photo..
                    <input type="file" name="photo">
                </label>
                <input  type="submit" value="Send file">
            </form>
        </div>
        <div id="modal"></div>
        <footer>
            created by vb
        </footer>
    </body>
<script src="main.js"></script>
</html>