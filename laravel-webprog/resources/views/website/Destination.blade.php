@extends('website/web_masterfile')

@section('content')
	<style>
    .parallax-window{
      min-height: 700px;
      background: transparent;
    }
    .window-wrapper{
      padding-top: 50px;
      /*height: 800px;*/
      background: #fffff;
    }
    </style>
	<div class="container-fluid">
		<div class="parallax-window" data-parallax="scroll" data-image-src="/images/mayon.png">
			<div style="padding-top:200px" class='text-center'>
				<h1 style="color:#fff; font-weight:bolder;">Welcome!</h1>
				<a href="#" class="btn btn-success">Videos</a>
			    <a href="#" class="btn btn-danger">More</a>
			</div>
		</div>
		<div class="window-wrapper">
	      <div class="container">
	        <h2>Mayon the Perfect Cone</h2>
	        <div class="col-md-12 wowload fadeInLeft" style="font-size: 17; padding-left:100px">
			    <p>
			      The Bicol region was known as Ibalon, variously interpreted to derive form ibalio, "to bring to the other side"; ibalon, "people from the other side" or "people who are hospitable and give visitors gifts to bring home"; or as a corruption of Gibal-ong, a sitio of Magallanes, Sorsogon where the Spaniards first landed in 1567. The Bicol River was first mentioned in Spanish Documents in 1572. The region was also called Los Camarines after the huts found by the Spaniards in Camalig, Albay. No prehistoric animal fossils have been discovered in Bicol and the peopling of the region remains obscure. The Aeta from Camarines Sur to Sorsogon strongly suggest that aborigines lived there long ago, but earliest evidence is of middle to late Neolithic life.
			    </p>
	      </div>
	    </div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="/images/19807339_1816715578344229_1001290403_o.png">
			<div style="padding-top:20px">
				<h3 class="wowload fadeInLeft" style="color:#fff; font-weight:bolder;">Adventures are waiting!</h3>
				<div class="col-md-6 wowload fadeInLeft">
					<p style="color: white; font-size: 25px">
				      Ocean's apart day after day. And I slowly go insane. I hear your voice on the line, and it doesn't stop the pain. If 
						I see you next to never, how can we stay forever. Wherever you go, whatever you do, I will be right here waiting for you. Whatever it takes, or how 
						my heart breaks, I will be right here waiting for you.
				    </p>
				</div>
			</div>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="/images/summer.jpg">
			<div style="padding-top:20px" class='text-right'>
				<h3 class="wowload fadeInRight" style="color:#fff; font-weight:bolder;">Travel alone xD</h3>
				<div class="col-md-6"></div>
				<div class="col-md-6 wowload fadeInRight">
					<p style="color: white; font-size: 25px" class='text-right'>
				     Not sure if you know this, but when we first met, I got so nervous I couldn't speak. In the very moment I found the one and my life had found its missing piece. So as long as live I love you, will heaven hold you You look so beatiful in white. And from now to my very last breathe this day I'll cherish You look so beatiful in white.
				    </p>
				</div>
			</div>
		</div>
		    <div class="window-wrapper">
		      <div class="container">
		        <div class="row">
		        	<div class="col-xs-4">
						<a class="thumbnail">
							<img src="/images/19858493_1816734441675676_1404071363_n.png" alt="Red spring">
						</a>
						<h3>Mayon at Sunset</h3>
						<p>Ocean's apart day after day. And I slowly go insane. I hear your voice on the line, and it doesn't stop the pain. If 
						I see you next to never, how can we stay forever. Wherever you go, whatever you do, I will be right here waiting for you. Whatever it takes, or how 
						my heart breaks, I will be right here waiting for you.</p>
						<button type="button" class="btn btn-primary">Click Me.</button>
					</div>
		          	<div class="col-xs-4">
						<a class="thumbnail">
							<img src="/images/19858824_1816734901675630_1179563452_n.png" alt="Red spring">
						</a>
						<h3>Mayon at Sunrise</h3>
						<p>Ocean's apart day after day. And I slowly go insane. I hear your voice on the line, and it doesn't stop the pain. If 
						I see you next to never, how can we stay forever. Wherever you go, whatever you do, I will be right here waiting for you. Whatever it takes, or how 
						my heart breaks, I will be right here waiting for you.</p>
						<button type="button" class="btn btn-primary">Click Me.</button>
					</div>
		          	<div class="col-xs-4">
						<a class="thumbnail">
							<img src="/images/19894206_1816730605009393_1338152917_n.png" alt="Red spring">
						</a>
						<h3>Mayon in your dreams</h3>
						<p>Ocean's apart day after day. And I slowly go insane. I hear your voice on the line, and it doesn't stop the pain. If 
						I see you next to never, how can we stay forever. Wherever you go, whatever you do, I will be right here waiting for you. Whatever it takes, or how 
						my heart breaks, I will be right here waiting for you.</p>
						<button type="button" class="btn btn-primary">Click Me.</button>
					</div>
		        </div>
		     </div>
    	</div>
    	<br>
    	<br>
	</div>
@endsection