@extends('website.layout.master')

@section('title', 'Course')


@section('content')

 <!-- /////////////////////////////////////// Information /////////// -->
 <div class="row" style="margin-top: 40px">

<div class="col-md-12 col-sm-12 col-xs-12 ">
 		
 	  <div >
    <div class="panel">
    	
	  <div class="panel-body">


 	<div class="col-md-12 col-sm-12 col-xs-12">
 		
 	  <div >
    <div class="panel">
    	
	  <div class="panel-body">

	  	@if(isset($courses))


	  		 	 <div class="">
    		<h3>Courses</h3>
    	</div>



    	@foreach($courses as $course)


    		<a href="{{route('course_details', ['id' => encrypt($course->id)])}}">
			    <div class="news">
			    	<p><i class="fa fa-clock-o"></i>{{date($course->created_at)}}</p>
			    	<h4>{{str_limit($course->title,40)}}</h4>
            <p>{{str_limit($course->description,100)}}</p>
			    </div>
			</a>

		@endforeach

		{!!$courses->links()!!}


	  	@else

		 	 <div class="">
	    		<h3>{{$course->title}}</h3>
	    	</div>

	    	<div>
	    		{!!$course->description!!}
	    	</div>

	    	<hr>


	    <h3>Lectures</h3>	

    	@foreach($lectures as $lecture)


    		<a href="{{route('lectureDetails', ['id' => encrypt($lecture->id)])}}">
			    <div class="news">
			    	<p><i class="fa fa-clock-o"></i>{{date($lecture->created_at)}}</p>
			    	<h4>{{str_limit($lecture->title,40)}}</h4>
            <p>{{str_limit($lecture->description,100)}}</p>
			    </div>
			</a>

		@endforeach


	

    	@endif


    		
	  </div>
	</div>
  </div>
  </div>

@endsection