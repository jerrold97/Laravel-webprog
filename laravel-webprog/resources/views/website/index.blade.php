@extends('website/web_masterfile')

@section('content')
<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="/images/photo1.png" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="/images/photo2.png" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="/images/photo3.png" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="/images/photo4.png" alt="banner">
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>









<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Bicol Region - Endless Discoveries</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> Introduction </h4>
    <p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs, lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs.</p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-coffee"></i> Passion</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>    
  </div>
  </div>

{{--   <div class="services">
  <h3 class="text-center wowload fadeInUp">Services</h3>
	<ul class="row text-center list-inline  wowload bounceInUp">
   		<li>
            <span><i class="fa fa-camera-retro"></i><b>Photography</b></span>
        </li>
        <li>
            <span><i class="fa fa-cube"></i><b>Studio</b></span>
        </li>
        <li>
            <span><i class="fa fa-graduation-cap"></i><b>Trainings</b></span>
        </li>
        <li>
            <span><i class="fa fa-umbrella"></i><b>Travel</b></span>
        </li>        
        <li>
            <span><i class="fa fa-heart-o"></i><b>Wedding</b></span>
        </li>
  	</ul>
  </div> --}}
</div>
<!-- #Cirlce Ends -->


<!-- works -->
<div id="works"  class=" clearfix grid"> 
  @foreach($destinations as $destination)
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="/images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>{{$destination->dname}}</h2>
            <p>{{$destination->ddesc}}<br>
            <a href="{{route('destinations')}}">View more</a></p>            
        </figcaption>
    </figure>
  @endforeach

    

     
</div>
<!-- works -->


<div id="partners" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
  <div class="clearfix">

  </div>


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
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-map-marker"></i><h4>742 Destinations</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-newspaper-o"></i><h4>523 Articles</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-users"></i><h4>454 Forum users</h4>
	</div>
	<div class="col-sm-3 col-xs-6">
	<i class="fa fa-calendar-o"></i><h4>200 events</h4>
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