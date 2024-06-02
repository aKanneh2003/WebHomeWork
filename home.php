<<h1>Welcome to Visit Salone</h1>
<p>Explore the beauty and culture of Sierra Leone.</p>

<h2>Video from Our Library</h2>
<?php
$video_path = 'Uploads/library.mp4'; // Ensure this is the correct file name and path
if (file_exists($video_path)) {
    echo "<video width='320' height='240' controls class='mb-3'>
            <source src='$video_path' type='video/mp4'>
            Your browser does not support the video tag.
          </video>";
}
?>

<h2>Video from YouTube</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/tXDYtxSslMk" frameborder="0" allowfullscreen class="mb-3"></iframe>

<h2>Our Location</h2>
<div id="map" style="height: 400px; width: 100%;" class="mb-3"></div>
<script>
    function initMap() {
        var location = { lat: 8.4844, lng: -13.2344 }; // Coordinates for Freetown, Sierra Leone
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: location
        });
        var marker = new google.maps.Marker({ position: location, map: map });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjhU8uaTPJYrzhP1iHw4u5YLPQGIsUxdY&callback=initMap"></script>
