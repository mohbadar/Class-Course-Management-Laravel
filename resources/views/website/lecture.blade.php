@extends('website.layout.master')

@section('title', $lecture->title)


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

	 

		 	 <div class="">
	    		<h3>{{$lecture->title}}</h3>
	    	</div>

	    	<div>
	    		{!!$lecture->description!!}
	    	</div>

	    	<hr>


	    <h3>Files</h3>	

    	@foreach($lecture->files as $file)

    		<div>
    			<a href="{{asset($file->file)}}"><p>{{$file->title}} <img src="{{asset('assets/website/assets/images/file.jpg')}}" style="max-width: 30px"></p></a>
    		</div>


		@endforeach




    		
	  </div>
	</div>
  </div>
  </div>

@endsection