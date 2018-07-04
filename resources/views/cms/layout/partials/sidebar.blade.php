



	<div class="page-container">
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.html">
						<img src="assets/images/ku-logo.png" width="120" alt="Kabul University" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon">
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation">
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">

				<li>
					<a href="{{route('home')}}">
						<i class="entypo-chart-bar"></i>
						<span class="title">Home</span>
					</a>
				</li>
				

				<li>
					<a href="{{route('list_users')}}">
						<i class="entypo-gauge"></i>
						<span class="title">User Management</span>
					</a>
					<ul>
						<li>
							<a href="{{route('create_user')}}">
								<span class="title">Create User</span>
							</a>
						</li>

						<li>
							<a href="{{route('list_users')}}">
								<span class="title">List User</span>
							</a>
						</li>
						
					</ul>
				</li>

				<li>
					<a href="{{route('list_subscribers')}}">
						<i class="entypo-gauge"></i>
						<span class="title">Subscriber Management</span>
					</a>
					<ul>
						<li>
							<a href="{{route('list_subscribers')}}">
								<span class="title">List Subscribers</span>
							</a>
						</li>

				
						
					</ul>
				</li>
				
				<li>
					<a href="{{route('list_posts')}}">
						<i class="entypo-window"></i>
						<span class="title">Post Management</span>
					</a>
					<ul>
						<li>
							<a href="{{route('create_post')}}">
								<span class="title">Create Post</span>
							</a>
						</li>
						<li>
							<a href="{{route('list_posts')}}">
								<span class="title">List Posts</span>
							</a>
						</li>
					</ul>
				</li>


								<li>
					<a href="{{route('list_courses')}}">
						<i class="entypo-window"></i>
						<span class="title">Course Management</span>
					</a>
					<ul>
						<li>
							<a href="{{route('create_course')}}">
								<span class="title">Create Course</span>
							</a>
						</li>
						<li>
							<a href="{{route('list_courses')}}">
								<span class="title">List Courses</span>
							</a>
						</li>
					</ul>

			

							<li>
					<a href="{{route('create_lecture')}}">
						<i class="entypo-gauge"></i>
						<span class="title">Lecture Management</span>
					</a>
					<ul>
									<li>
									<a href="{{route('create_lecture')}}">
										<span class="title">Create Lecture</span>
									</a>
								</li>
					</ul>
				</li>
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							{{Auth::user()->firstname.' '. Auth::user()->lastname}}
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="{{route('update_user',['id' => encrypt(Auth::user()->id)])}}">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>
		
							<li>
								<a href="{{route('logout')}}">
									<i class="entypo-mail"></i>
									Sign Out
								</a>
							</li>
		
						</ul>
					</li>
		
				</ul>
				
			
		
				
		
			</div>
		
		
		
		</div>