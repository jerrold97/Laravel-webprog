@extends('website/web_masterfile')z
@section('style')
  <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
@endsection
@section('content')
<div id="home">
<!-- Slider Starts -->
<img src="/images/mayon.png" alt="banner">
<!-- #Slider Ends -->
</div>


<div class="jumbotron text-center">
  <h1>Welcome to Bicol Region!</h1>
        <p>Bicol is a region in the Philippines encompassing the southern part of Luzon Island and nearby island provinces. Caramoan, a peninsula in the east, is dotted with caves, limestone cliffs and white-sand beaches. Nearby, Catanduanes Island has mountains, waterfalls and coral reefs. Donsol, in the west, is home to whale sharks. The region’s active volcanoes include Bulusan Volcano and Mayon Volcano.</p>
      
</div>
<div class="well btn btn-primary wowload fadeInLeft"><h2>Brief History</h2><hr></div>
<div class="container-fluid spacer">
  <div class="col-md-8 wowload fadeInLeft" style="font-size: 17; padding-left:100px">
    <p>
      The Bicol region was known as Ibalon, variously interpreted to derive form ibalio, "to bring to the other side"; ibalon, "people from the other side" or "people who are hospitable and give visitors gifts to bring home"; or as a corruption of Gibal-ong, a sitio of Magallanes, Sorsogon where the Spaniards first landed in 1567. The Bicol River was first mentioned in Spanish Documents in 1572. The region was also called Los Camarines after the huts found by the Spaniards in Camalig, Albay. No prehistoric animal fossils have been discovered in Bicol and the peopling of the region remains obscure. The Aeta from Camarines Sur to Sorsogon strongly suggest that aborigines lived there long ago, but earliest evidence is of middle to late Neolithic life.
    </p>
    <p>
      A barangay (village) system was in existence by 1569. Records show no sign of Islamic rule nor any authority surpassing the datu (chieftain). Precolonial leadership was based on strength, courage, and intelligence. The native seemed apolitical. Thus the datu's influence mattered most during crises like wars. Otherwise, early Bicol society remained family centered, and the leader was the head of the family.
    </p>
    <p>
      The Spanish influence in Bicol resulted mainly from the efforts of Augustinian and Franciscan Spanish missionaries. The first churches in Bicol, the San Francisco Church, and the Naga Cathedral, both in Naga, along with the Holy Cross Parish in Nabua, Camarines Sur, are instituted by the Holy Order of the Franciscans. One of the oldest dioceses in the Philippines, the Archdiocese of Caceres, was also instituted in the Bicol Region. During this time, Bicol was dotted by many astilleros (shipyards) which were focused on constructing Manila Galleons from the local hardwood forests.
    </p>
  </div>
  <div class="col-md-4 wowload fadeRight">
    <a class="thumbnail"><img src="/images/cagsawa.png" alt="Cagsawa"/></a>
    <p>
      The Cagsawa Ruins are the remnants of a 16th-century Franciscan church, the Cagsawa church. It was built in 1587 but was burned down by the marauding Dutch in 1636. However, it was reconstructed again in 1724 by Fr. Francisco Blanco.
    </p>
  </div>
</div>
<div class="well btn btn-primary wowload fadeInLeft"><h2>Geography</h2><hr></div>
<div class="container">
  <div class="col-md-8">
    <div id="map"></div>
  </div>
  
  <div class="col-md-4">
    <p>The Bicol Region comprises the southern part of Luzon, the largest island in the Philippine archipelago. The total land area is 5.9% of the total land area of the country. Around 69.3% of the total land area is alienable and disposable while the remaining 30.7% is public forest areas.</p>
  </div>
</div>
<br>
  <br>
<!-- Cirlce Starts -->
<div class="well btn btn-primary wowload fadeInUp"><h2>Provinces</h2><hr></div>
<div  class="container about">
  <div class="services">
  <ul class="row list-inline text-center wowload bounceInUp">
      <li>
            <span><i class="fa fa-camera-retro"></i><b><a href="">Camarines Norte</a></b></span>
        </li>
        <li>
            <span><i class="fa fa-cube"></i><b><a href="">Camarines Norte</a></b></span>
        </li>
        <li>
            <span><i class="fa fa-graduation-cap"></i><b><a href="">Camarines Sur</a></b></span>
        </li>
        <li>
            <span><i class="fa fa-umbrella"></i><b><a href="">Catanduanes</a></b></span>
        </li>        
        <li>
            <span><i class="fa fa-heart-o"></i><b><a href="">Masbate</a></b></span>
        </li>
        <li>
            <span><i class="fa fa-heart-o"></i><b><a href="">Sorsogon</a></b></span>
        </li>
    </ul>
  </div>
</div>
<!-- #Cirlce Ends -->




<!-- team -->
<h3 class="text-center  wowload fadeInUp">Government Officials</h3>
<p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">  
  <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="/images/team/8.jpg" alt="img01" class="img-responsive" />
        <figcaption>
            <p><b>Philip Pogi</b><br>Governor<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="/images/team/10.jpg" alt="img01"/>
        <figcaption>            
            <p><b>Jerrold Verzosa</b><br>Mayor<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="/images/team/12.jpg" alt="img01"/>
        <figcaption>
            <p><b>Earl Dixon</b><br>Barangay Captain<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>          
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
  <figure class="effect-chico">
        <img src="/images/team/17.jpg" alt="img01"/>
        <figcaption>
            <p><b>Candy Victoria</b><br>Barangay Captain<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>

 
</div>
<!-- team -->

</div>









<!-- About Starts -->
<div class="highlight-info" style="background-color: gray">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-smile-o  fa-5x"></i><h4>Foods</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-rocket  fa-5x"></i><h4>Locals</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-cloud-download  fa-5x"></i><h4>Culture</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-map-marker fa-5x"></i><h4>People</h4>
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->








<div id="contact" class="spacer">
<!--Contact Starts-->
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Get in touch to us</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Company">
        <textarea rows="5" placeholder="Message"></textarea>
        <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
      </div>
  </div>



</div>
</div>
<!--Contact Ends-->
@endsection
<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrTeJ80nSMBPl69HEW7jz2iDri9johzjM&callback=initMap">
</script>