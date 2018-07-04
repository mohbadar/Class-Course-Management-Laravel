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
								<strong>Create</strong>
							@endif
		
							</li>
							</ol>

<!-- End tracker							 -->


@if(isset($update))



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
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('edit_lecture')}}" method="POST" enctype="multipart/form-data">


							<input type="hidden" name="lecture_id" value="{{encrypt($lecture->id)}}">
				
							{{csrf_field()}}
													
							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">
								
									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="Title" name="title" value="{{$lecture->title}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>

										@if($errors)
											<strong style="color:red">{{$errors->first('title')}}</strong>
										@endif
											
									</div>

								<div>	

									<div>
										<select class="form-control" name="course">
											<option selected disabled> Select Course</option>

						@foreach($courses as $course)
							<option value="{{encrypt($course->id)}}"

							{{$lecture->course_id == $course->id ? 'selected' : ''}} >{{$course->title}}</option>

						@endforeach
											
										</select>	
									</div>
									@if($errors)
											<strong style="color:red">{{$errors->first('course')}}</strong>
										@endif

								</div>	


							</div></div><br>

							<h3>
							 Description
							</h3>
							

							<textarea name="description" class="form-control" data-uk-markdownarea="{mode:'tab'}">
								{!!$lecture->description!!}
							</textarea><br>
					

							<br>

							<button class="btn btn-primary" type="submit">Update Lecture</button>
							
						
						</form>
						
					</div>
					
				</div>
			
			</div>
		</div>



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
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('save_lecture')}}" method="POST" enctype="multipart/form-data">
				
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

									<div>
										<select class="form-control" name="course">
											<option selected disabled> Select Course</option>

											@foreach($courses as $course)
												<option value="{{encrypt($course->id)}}">{{$course->title}}</option>

											@endforeach
											
										</select>	
									</div>
									@if($errors)
											<strong style="color:red">{{$errors->first('course')}}</strong>
										@endif

								</div>	


							</div></div><br>

							<h3>
							 Description
							</h3>
							

							<textarea name="description" class="form-control" data-uk-markdownarea="{mode:'tab'}"></textarea><br>
					

							<br>

							<button class="btn btn-primary" type="submit">Create Lecture</button>
							
						
						</form>
						
					</div>
					
				</div>
			
			</div>
		</div>



@endif



@stop