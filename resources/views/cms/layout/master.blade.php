<!DOCTYPE html>
<html>
<head>
	@include('cms.layout.partials.head')
</head>
<body class="page-body">
	@include('cms.layout.partials.sidebar')

	  @if(session()->has('successMsg') && is_array(session('successMsg')) )
	<div class="alert alert-success">
 		<a href="#" class="my-alert-dismissible close " data-dismiss="alert" aria-label="close">&times;</a>
 		@foreach (session('successMsg') as $msg)
 			<li><strong><i class="fa fa-check" aria-hidden="true"></i> </strong> {{ $msg }}</li>
 		@endforeach
 		
      
    </div>
   @elseif (session()->has('successMsg'))
   	<div class="alert alert-success">
 		<a href="#" class="my-alert-dismissible close " data-dismiss="alert" aria-label="close">&times;</a>
 		<strong><i class="fa fa-check" aria-hidden="true"></i> </strong> {{session()->get('successMsg')}}
      
    </div>
   @endif
					

				


	@yield('content')


		<footer class="main">
			
			&copy; 2018 <strong>LMS</strong> Software Engineer <a href="http://mohbadar.github.io" target="_blank">Mohammad Badar Hashimi</a>
		
		</footer>
	</div>	
</div>



	@include('cms.layout.partials.scripts')
</body>
</html>