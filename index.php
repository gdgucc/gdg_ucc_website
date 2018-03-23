<?php include 'includes/header.inc.php'; ?>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light custom-navbar">
		<a class="navbar-brand" href="#">
			<img src="assets/img/gdg.png" alt="">
			GDG UCC
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-navicon"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
			
				<li class="nav-item">
					<a class="nav-link" href="activities.php">What We Do</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#events">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gallery.php">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://gdgucc.blogspot.com/" target="blank">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- intro div -->
	<section class="container-fluid intro-div">
		<section class="intro-row">
			<h2 class="text-center text-white" id="intro"></h2><br>
			<h2 class="text-center text-white wow fadeIn" data-wow-duration="1.5s" data-wow-delay="2s">We are GDG UCC</h2>
			<p class="text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="2.5s"><a href="" title="" class="btn btn-info">Explore</a></p>
		</section>
	</section>

	<!-- about div -->
	<section class="container-fluid about-div" id="about" data-parallax="scroll" data-image-src="assets/img/about-bg.png">
		<h5 class="text-center text-white">What Is GDG ?</h5><br>
		<section class="row">
			<section class="col-md-2"></section>
			<section class="col-md-8">
				<p class="text-center text-white">
					Google Developer Groups (GDGs) are for developers who are interested in Google's developer technology; everything from the <a class="linkcolor" href="https://developer.android.com/" target="blank"> Android </a>, <a  class="linkcolor" href="https://developers.google.com/appengine/" target="blank">App Engine </a>, and <a class="linkcolor" href="https://developers.google.com/chrome/" target="blank">Google Chrome platforms</a>, to product APIs like the <a class="linkcolor" href="https://developers.google.com/maps/" target="blank"> Maps API</a>, <a class="linkcolor" href="https://developers.google.com/youtube/" target="blank">YouTube API </a>and <a class="linkcolor" href="https://developers.google.com/google-apps/calendar/" target="blank">Google Calendar API</a>.<br>A GDG can take many forms -- from just a few people getting together to watch our<a class="linkcolor" href="https://developers.google.com/google-apps/calendar/" target="blank"> latest video</a>, to large gatherings with demos and tech talks, to events like code sprints and hackathons. However, at the core, GDGs are focused on developers and technical content, and the core audience should be developers.</p>
            		
            		<p class="text-center text-white">Run by passionate individuals in the developer community.
            		A place to learn about <a class="linkcolor" href="http://www.youtube.com/user/GoogleDevelopers" target="blank">Google Technologies and Tools </a> for 		
	            	developers.A place to see what local companies and developers are doing with these technologies.Focused on developers and educational technical 
	            	content.Open to the public with a public membership and A place to meet cool and smart people in tech :). The above stated is in the truest sense 
	            	what <a  class="linkcolor" href="https://developers.google.com" target="blank">GDG </a>is and we in GDG UCC strive to make that possible for all.
	            </p>
			</section>
			<section class="col-md-2"></section>
		</section>
	</section>

	<section class="container-fluid events-div" id="events" >
		<h5 class="text-center text-white">Events</h5><br>
		<section class="row events-row">
			<section class="col-md-3 col-xs-12 event-item">
				<img src="assets/img/event-firebase.png" title="" class="">
				<p><span class="event-desc">
					Extend and connect Firebase centerspread with Cloud Functions so you can run your mobile backend code without having to think about servers.  
				</span></p><br>
				<p><b><i class="fa fa-calendar"></i></b>  <span class="event-date">20 Apr 2018</span></p>
				<p><b><i class="fa fa-map-marker"></i></b>  <span class="event-venue">Event Venue</span></p>
				<p><b><i class="fa fa-clock-o"></i></b> <span class="event-time">10:00am</span></p>
			</section>

			<section class="col-md-3 col-xs-12 event-item">
				<img src="assets/img/event-io-17.png" title="" class="">
				<p><span class="event-desc">
					The first wave of #io17 sessions is now live! Start building your custom schedule and check back often for updates and additions.   
				</span></p><br>
				<p><b><i class="fa fa-calendar"></i></b>  <span class="event-date">20 Apr 2018</span></p>
				<p><b><i class="fa fa-map-marker"></i></b>  <span class="event-venue">Event Venue</span></p>
				<p><b><i class="fa fa-clock-o"></i></b> <span class="event-time">10:00am</span></p>
			</section>


		</section>

	</section>

	<section class="container-fluid products-div">
		<h5 class="text-center text-white">Products And Platforms</h5><br>

		<section class="row products-row">
			<section class="product-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
				<a href="https://developer.android.com/" target="_blank" title="">
					<img src="assets/img/android.png" title="" class="product-item-img">
					<p class="text-center text-white">Android</p>
				</a>
			</section>
			
			<section class="product-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<a href="https://cloud.google.com/" target="_blank" title="">
					<img src="assets/img/cloud.png" title="" class="product-item-img">
					<p class="text-center text-white">Cloud Platform</p>
				</a>
			</section>

			<section class="product-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
				<a href="https://firebase.google.com/" target="_blank" title="">
					<img src="assets/img/firebase.png" title="" class="product-item-img">
					<p class="text-center text-white">Firebase</p>
				</a>
			</section>

			<section class="product-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
				<a href="https://maps.google.com/" target="_blank" title="">
					<img src="assets/img/maps.png" title="" class="product-item-img">
					<p class="text-center text-white">Maps</p>
				</a>
			</section>

			<section class="product-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
				<a href="https://developers.google.com/web/" target="_blank" title="">
					<img src="assets/img/web.png" title="" class="product-item-img">
					<p class="text-center text-white">Web</p>
				</a>
			</section>

			<section class="product-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
				<a href="https://codelabs.developers.google.com/" target="_blank" title="">
					<img src="assets/img/codelabs.png" title="" class="product-item-img">
					<p class="text-center text-white">Codelabs</p>
				</a>
			</section>
			
		</section><br><br><br>

		<h6 class="text-center text-white wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.8s">More Resources...</h6><br>
		<section class="row products-row wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.9s">
			<section class="product-item" >
				<a href="https://developers.google.com/games/" target="_blank" title="">
					<i class="fa fa-map-pin text-white resource-icon"></i>
					<p class="text-center text-white"><small>Games</small></p>
				</a>
			</section>

			<section class="product-item" >
				<a href="https://developers.google.com/startups/" target="_blank" title="">
					<i class="fa fa-briefcase text-white resource-icon"></i>
					<p class="text-center text-white"><small>Startup</small></p>
				</a>
			</section>

			<section class="product-item" >
				<a href="https://www.youtube.com/user/GoogleDevelopers" target="_blank" title="">
					<i class="fa fa-video-camera text-white resource-icon"></i>
					<p class="text-center text-white"><small>Videos</small></p>
				</a>
			</section>

			<section class="product-item" >
				<a href="https://developers.google.com/training/" target="_blank" title="">
					<i class="fa fa-graduation-cap text-white resource-icon"></i>
					<p class="text-center text-white"><small>Training</small></p>
				</a>
			</section>

			<section class="product-item" >
				<a href="https://qwiklabs.com/" target="_blank" title="">
					<i class="fa fa-code text-white resource-icon"></i>
					<p class="text-center text-white"><small>QwikLabs</small></p>
				</a>
			</section>

			<section class="product-item" >
				<a href="https://googledevelopers.blogspot.com/" target="_blank" title="">
					<i class="fa fa-th-list text-white resource-icon"></i>
					<p class="text-center text-white"><small>Blog</small></p>
				</a>
			</section>
		</section>
	</section>

<?php include 'includes/footer.inc.php'; ?>
<script>
    typeWriter();
</script>