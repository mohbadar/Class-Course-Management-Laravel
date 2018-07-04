@extends('cms.layout.master')

@section('title' , 'Course Management')


@section('content')


<!-- Tracker -->
		<hr />
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">Post Managemnet</a>
							</li>
						<li class="active">

							@if(isset($update))
								<strong>Update</strong>

							@else
								<strong>List</strong>
							@endif
		
							</li>
							</ol>

<!-- End tracker							 -->


@if(isset($update))


@else


	<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Post Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >

@if(Session::has('succesMsg'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('succesMsg') !!}</em></div>
@endif
							<table class="table table-strip">
								
								<th>Title</th>
								<th>Description</th>
								<th>Delete</th>
								<th>Update</th>
								<th>Lectures</th>

								@foreach($courses as $course)
									<tr>
										<td>{{$course->title}}</td>
										<td>{{str_limit($course->description, 100)}}</td>
										<td><a href="{{route('course_delete',['id' => encrypt($course->id)])}}"> <i class="entypo-trash"></i></a></td>


										<td><a href="{{route('update_course',['id' => encrypt($course->id)])}}"> <i class="entypo-list"></i></a></td>


										<td><a href="{{route('list_lectures',['id' => encrypt($course->id)])}}"> <i class="entypo-book"></i></a></td>
									</tr>
								@endforeach

								{!!$courses->links()!!}

							</table>
					</div>
					
				</div>
			
			</div>
		</div>



@endif



@stop