@extends('cms.layout.master')

@section('title' , 'User Management')


@section('content')


<!-- Tracker -->
		<hr />
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">User Managemnet</a>
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
							User Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('edit_user')}}" method="POST" enctype="multipart/form-data">
				
							{{csrf_field()}}
													
							<input type="hidden" name="user_id" value="{{encrypt($user->id)}}">							

							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">
								
									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="FirstName" name="firstname" value="{{$user->firstname}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('firstname')}}</strong>
										@endif

										</div>
											
									</div>

									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="LastName" name="lastname" value="{{$user->lastname}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('lastname')}}</strong>
										@endif

										</div>
											
									</div>


																		<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="UserName" name="username" value="{{$user->username}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('username')}}</strong>
										@endif

										</div>
											
									</div>



		<!-- 																<div>
										<div class="input-group minimal">
											<input type="enail" class="form-control" placeholder="Email Address" name="email" value="{{old('email')}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('email')}}</strong>
										@endif

										</div>
											
									</div>
 -->
																		<div>
										<div class="input-group minimal">
											<input type="Password" class="form-control" placeholder="Password" name="password" >
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('password')}}</strong>
										@endif

										</div>
											
									</div>





							</div></div><br>

			

							<br>

							<button class="btn btn-primary" type="submit">Edit Account</button>
							
						
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
							User Management
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('save_user')}}" method="POST" enctype="multipart/form-data">
				
							{{csrf_field()}}
													
							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">
								
									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="FirstName" name="firstname" value="{{old('firstname')}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('firstname')}}</strong>
										@endif

										</div>
											
									</div>

									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="LastName" name="lastname" value="{{old('lastname')}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('lastname')}}</strong>
										@endif

										</div>
											
									</div>


																		<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="UserName" name="username" value="{{old('username')}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('username')}}</strong>
										@endif

										</div>
											
									</div>



		<!-- 																<div>
										<div class="input-group minimal">
											<input type="enail" class="form-control" placeholder="Email Address" name="email" value="{{old('email')}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('email')}}</strong>
										@endif

										</div>
											
									</div>
 -->
																		<div>
										<div class="input-group minimal">
											<input type="Password" class="form-control" placeholder="Password" name="password">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										@if($errors)
											<strong style="color:red">{{$errors->first('password')}}</strong>
										@endif

										</div>
											
									</div>





							</div></div><br>

			

							<br>

							<button class="btn btn-primary" type="submit">Create Account</button>
							
						
						</form>
						
					</div>
					
				</div>
			
			</div>
		</div>



@endif



@stop