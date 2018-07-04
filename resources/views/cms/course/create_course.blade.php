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
		
									<a href="forms-main.html">Course Managemnet</a>
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
							Course Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('edit_course')}}" method="POST" enctype="multipart/form-data">


							<input type="hidden" name="course_id" value="{{encrypt($course->id)}}">
				
							{{csrf_field()}}
													
							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">
								
									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="Title" name="title" value="{{$course->title}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>
											                        @if($errors)
                            <strong style="color:red">{{$errors->first('title')}}</strong>
                        @endif

									</div>



									<div>
										<div class="input-group minimal">
											<input type="number" class="form-control" placeholder="Year" name="year" value="{{$course->year}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>
											                        @if($errors)
                            <strong style="color:red">{{$errors->first('year')}}</strong>
                        @endif

									</div>

								<div>	



							</div></div><br>

							<h3>
							 Description
							</h3>
							

							<textarea name="description" class="form-control" data-uk-markdownarea="{mode:'tab'}">
								
								{!! $course->description !!}

							</textarea><br>
							                        @if($errors)
                            <strong style="color:red">{{$errors->first('description')}}</strong>
                        @endif




							<br>

							<button class="btn btn-primary" type="submit">Update Course</button>
							
						
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
							Course Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('save_course')}}" method="POST" enctype="multipart/form-data">
				
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
										<div class="input-group minimal">
											<input type="number" class="form-control" placeholder="Year" name="year">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>
											
									</div>
									                        @if($errors)
                            <strong style="color:red">{{$errors->first('year')}}</strong>
                        @endif


								<div>	



							</div></div><br>

							<h3>
							 Description
							</h3>
							

							<textarea name="description" class="form-control" data-uk-markdownarea="{mode:'tab'}"></textarea><br>
                        @if($errors)
                            <strong style="color:red">{{$errors->first('description')}}</strong>
                        @endif



							<br>

							<button class="btn btn-primary" type="submit">Create Course</button>
							
						
						</form>
						
					</div>
					
				</div>
			
			</div>
		</div>



@endif



@stop