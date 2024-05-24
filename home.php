<section class="videos">
   <div class="video-container">
      <!-- Embed YouTube video -->
      <iframe width="560" height="315" src="https://www.youtube.com/watch?v=OCzzN8VZgfY" frameborder="0" allowfullscreen></iframe>
   </div>
   <div class="video-container">
      <!-- Local video -->
      <video controls>
         <source src="video2.mp4" type="video/mp4">
         Your browser does not support the video tag.
      </video>
   </div>
</section>

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel around the world</h3>
               <a href="index.php?page=package" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="index.php?page=package" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="index.php?page=package" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>
   <script>
document.getElementById('loadDestinations').addEventListener('click', function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'index.php?page=home&action=loadDestinations', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var destinations = JSON.parse(xhr.responseText);
            var destinationsContainer = document.getElementById('destinations');
            destinationsContainer.innerHTML = '';
            destinations.forEach(function(destination) {
                var div = document.createElement('div');
                div.className = 'destination';
                div.innerHTML = '<h3>' + destination.name + '</h3><p>' + destination.description + '</p>';
                destinationsContainer.appendChild(div); });
        }
    };
    xhr.send();
});
</script>
</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Discover hidden sites with us!</p>
      <a href="index.php?page=about" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Travel the world</p>
            <a href="index.php?page=login" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Explore and discover</p>
            <a href="index.php?page=login" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="index.php?page=login" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="index.php?page=package" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Grab your exclusive discount now!</p>
      <a href="index.php?page=book" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->
