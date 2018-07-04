@extends('website.layout.master')

@section('title', 'Post')


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

	  	@if(isset($posts))


	   @if(isset($isArticle))
	   <div class="">
    		<h3>Articles</h3>
    	</div>
	   @else
	   <div class="">
    		<h3>Announcements</h3>
    	</div>
	   @endif


    	@foreach($posts as $post)

    		<a href="{{route('post_details', ['id' => encrypt($post->id)])}}">
			    <div class="news">
			    	<p><i class="fa fa-clock-o"></i>{{date($post->created_at)}}</p>
			    	<h4>{{str_limit($post->title,40)}}</h4>
            <p>{{str_limit($post->content,100)}}</p>
			    </div>
			</a>

		@endforeach		

		{!!$posts->links()!!}




	  	@else

		 	 <div class="">
	    		<h3>{{$post->title}}</h3>
	    	</div>

	    	<div>
	    		{!!$post->content!!}
	    	</div>

	    	@if($post->file)
	    		<a href="{{asset($post->file)}}"><i class="fa fa-file fa-2x"></i></a>
	    	@endif	

    	@endif


    		
	  </div>
	</div>
  </div>
  </div>

@endsection