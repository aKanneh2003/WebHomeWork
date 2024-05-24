<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gallery</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">

   <a href="index.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="index.php?page=loggedinhome">home</a>
      <a href="index.php?page=about">about</a>
      <a href="index.php?page=book">package</a>
      <a href="index.php?page=gallery">Gallery</a>
      <a href="index.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- gallery section starts  -->

<section class="gallery">

   <h1 class="heading-title">our gallery</h1>

   <div class="box-container">
      <!-- Display uploaded images -->
      <?php
      $dir = "uploads/";
      if (is_dir($dir)){
          if ($dh = opendir($dir)){
              while (($file = readdir($dh)) !== false){
                  if ($file != "." && $file != "..") {
                      echo '<div class="box">';
                      echo '<img src="uploads/' . $file . '" alt="">';
                      echo '</div>';
                  }
              }
              closedir($dh);
          }
      }
      ?>
   </div>

   <div class="upload-form">
      <h2>Upload a New Photo</h2>
      <form action="index.php?page=gallery&action=upload" method="post" enctype="multipart/form-data">
         Select image to upload:
         <input type="file" name="fileToUpload" id="fileToUpload">
         <input type="submit" value="Upload Image" name="submit" class="btn">
      </form>
   </div>

</section>

<!-- gallery section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
