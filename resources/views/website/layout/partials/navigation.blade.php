	<!-- //////////////////////////////////////////////////////////////////// -->
                             <!-- HEADER SECTION -->
<!-- /////////////////////////////////////////////////////////////////// -->

<!-- Top Fixed Navigation Bar -->
<section>
<div class=" fixedTopnav navbar navbar-inverse navbar-fixed-top hidden-xs" role="navigation">	
	
	<div class="container pull-left">
		<div class="navbar-header">
   
	
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav pull-left">
		<li class=""><a href="#">CS Faculty</a></li>
			<li><a href="#">Our Students</a></li>
			<li><a href="#">Alumni</a></li>
			<li><a href="#">Media</a></li>
			<li><a href="#">E-Learning</a></li>
			<li><a href="{{route('articles')}}">Research</a></li>
			<li><a href="{{route('login')}}">Login</a></li>
		</ul>
   	
	</div>
	
	</div>
</div>
</section>
	<!-- End Top fixed Navigation Bar -->
<!-- Main Navigation Bar Start -->
<div class="navbar navbar-inverse navbar-static-top main-nav" role="navigation">	
	<div class="container no-pad">


	
	<div class="col-md-9 col-xs-12  pull-left mobile">
		<div class="collapse navbar-collapse nav-pad">
		
		<ul class="nav navbar-nav">
			<li class=""><a href="#">Home</a></li>
		
			<li  class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publications</a>
				  <ul class="dropdown-menu">
		            <li><a href="{{route('articles')}}">Articles</a></li>
		            <li><a href="{{route('list_announcements')}}">Announcements</a></li>
		           </ul> 
			</li>
			<li class=""><a href="{{route('list_courses_web')}}">Courses</a></li>
			<li class=""><a href="{{route('subscribe')}}">Subscribe</a></li>

			<li  class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extra</a>
				  <ul class="dropdown-menu">
		            <li><a href="" >About Us</a></li>
		            <li><a href="">Contact Us</a></li>
		      		
		           </ul> 
			</li>

			<li class=""><a href="{{route('login')}}">Sign to System</a></li>


		</ul>
		
	</div>
	</div>

	<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button> 
			 <div class="col-md-10 col-sm-8 col-xs-8 hidden-xs hidden-sm"><a class="navbar-brand" href="#"><img src="{{asset('assets/website/assets/images/ku.png')}}" width="70"  class="img-responsive img"></a></div>
		</div>
		</div>
	</div>
</div>
