<?php
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    echo '<p>You must be logged in to view and upload images.</p>';
    return;
}
?>

<h1>Image Gallery</h1>

<form action="galleryprocess.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="fileToUpload">Select image to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" required>
    </div>
    <button type="submit" class="btn btn-primary">Upload Image</button>
</form>

<h2>Gallery</h2>
<div class="row">
    <?php
    $images = glob("uploads/*.{jpg,png,jpeg,gif}", GLOB_BRACE);
    foreach ($images as $image) {
        echo '<div class="col-md-3"><img src="' . $image . '" class="img-thumbnail" /></div>';
    }
    ?>
</div>
