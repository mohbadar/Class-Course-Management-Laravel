@extends('cms.layout.master')

@section('title' , 'Lecture Management')


@section('content')


<!-- Tracker -->
		<hr />
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">Lecture Managemnet</a>
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
							Lecture Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >



	@if(isset($isDetails))


	<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Lecture Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >


							<table class="table table-strip">
								
								<tr>
									<td>Title</td>
									<td>{{$lecture->title}}</td>
								</tr>

	<tr>
									<td>Course</td>
									<td>{{$lecture->course->title}}</td>
								</tr>


									<tr>
									<td>Description</td>
									<td>{!!$lecture->description!!}</td>
								</tr>
							</table>
					</div>
					
				</div>
			
			</div>
		</div>





		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							File Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('add_file')}}" method="POST" enctype="multipart/form-data">


							<input type="hidden" name="lecture_id" value="{{encrypt($lecture->id)}}">
				
							{{csrf_field()}}
													
							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">
								
									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="Title" name="title">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>

										@if($errors)
											<strong style="color:red">{{$errors->first('title')}}</strong>
										@endif
											
									</div>

								<div>	

								

							<div class="form-control">
								<input type="file" name="file">
							</div>
					

							<br>

							<button class="btn btn-primary" type="submit">Add New File </button>
							
						
						</form>



						<h3>Files</h3>

						<table class="table table-strip">
							<th>Title</th>
							<th>File</th>
							<th>Delete</th>
							<th>Update</th>


							@foreach($lecture->files as $file)
							<tr>
								<td>{{$file->title}}</td>
								<td><a href="{{asset($file->file)}}">
									<i class="entypo-book"></i>
								</a></td>


										<td><a href="{{route('lecture_delete',['id' => encrypt($lecture->id)])}}"> <i class="entypo-trash"></i></a></td>


										<td><a href="{{route('update_lecture',['id' => encrypt($lecture->id)])}}"> <i class="entypo-list"></i></a></td>
							</tr>


							@endforeach
						</table>
						
					</div>
					
				</div>
			
			</div>
		</div>




	

@else
								<table class="table table-strip">
								
								<th>Title</th>
								<th>Course</th>
						
								<th>Delete</th>
								<th>Update</th>
								<th>Details</th>
						

								@foreach($lectures as $lecture)
									<tr>
										<td>{{$lecture->title}}</td>
										<td>{{$lecture->course->title}}</td>

										
										<td><a href="{{route('lecture_delete',['id' => encrypt($lecture->id)])}}"> <i class="entypo-trash"></i></a></td>


										<td><a href="{{route('update_lecture',['id' => encrypt($lecture->id)])}}"> <i class="entypo-list"></i></a></td>

										<td><a href="{{route('show_details',['id' => encrypt($lecture->id)])}}"> <i class="entypo-info"></i></a></td>


								
									</tr>
								@endforeach

								{!!$lectures->links()!!}

							</table>
					</div>
					
				</div>
			
			</div>
		</div>






	@endif	



@endif



@stop