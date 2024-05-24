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
   <button id="loadDestinations" class="btn">Load Destinations</button>
   <div id="destinations"></div>
</section>

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
                destinationsContainer.appendChild(div);
            });
        }
    };
    xhr.send();
});
</script>
