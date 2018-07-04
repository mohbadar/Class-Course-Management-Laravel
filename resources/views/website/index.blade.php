@extends('website.layout.master')

@section('title', 'Home')


@section('content')

 <!-- /////////////////////////////////////// Information /////////// -->
 <div class="row" style="margin-top: 40px">

<div class="col-md-7 col-sm-12 col-xs-12 pull-right">
 		
 	  <div >
    <div class="panel">
    	
	  <div class="panel-body">
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
    		
    
	  </div>
	  <div class="panel-footer no-border"><a href="#" class="btn more" role="button">See All Courses <i class="fa fa-angle-right"></i></a></div>
	</div>
  </div>
  </div>

 	<div class="col-md-5 col-sm-12 col-xs-12">
 		
 	  <div >
    <div class="panel">
    	
	  <div class="panel-body">
	 	 <div class="">
    		<h3>Announcements</h3>
    	</div>


    	@foreach($posts as $post)

    		<a href="{{route('post_details', ['id' => encrypt($post->id)])}}">
			    <div class="news">
			    	<p><i class="fa fa-clock-o"></i>{{date($post->created_at)}}</p>
			    	<h4>{{str_limit($post->title,40)}}</h4>
            <p>{{str_limit($post->content,100)}}</p>
			    </div>
			</a>

		@endforeach		


    		
	  </div>
	  <div class="panel-footer no-border"><a href="#" class="btn more" role="button">See All Announcements <i class="fa fa-angle-right"></i></a></div>
	</div>
  </div>
  </div>


  <!-- Articles -->
<div class="col-md-12 col-sm-12 col-xs-12 ">
 		
 	  <div >
    <div class="panel">
    	
	  <div class="panel-body">
	 	 <div class="">
    		<h3>Articles</h3>
    	</div>


    	@foreach($articles as $post)

    		<a href="{{route('post_details', ['id' => encrypt($post->id)])}}">
			    <div class="news">
			    	<p><i class="fa fa-clock-o"></i>{{date($post->created_at)}}</p>
			    	<h4>{{str_limit($post->title,40)}}</h4>
            <p>{{str_limit($post->content,100)}}</p>
			    </div>
			</a>

		@endforeach	
    		
    
	  </div>
	  <div class="panel-footer no-border"><a href="#" class="btn more" role="button">See All Articles <i class="fa fa-angle-right"></i></a></div>
	</div>
  </div>
</div></div>
@endsection