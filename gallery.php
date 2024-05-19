<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gallery</title>
</head>
<body>
   
<!-- Header section starts  -->
<section class="header">
   <a href="index.php" class="logo">Travel.</a>
   <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="gallery.php">Gallery</a>
      <a href="index.php">Logout</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- Header section ends -->

<!-- Gallery upload section -->
<section class="gallery-upload">
   <h2>Upload Images</h2>
   <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file" id="file">
      <button type="submit" name="submit">Upload</button>
   </form>
</section>
<!-- Gallery upload section ends -->

<!-- Your other sections -->

<!-- Footer section starts -->
<!-- Your footer content -->
<!-- Footer section ends -->

<!-- Swiper and custom JS links -->
<!-- Your JavaScript links -->
</body>
</html>
