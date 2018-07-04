@extends('cms.layout.master')

@section('title' , 'Post Management')


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
						
							<table class="table table-strip">
								
								<th>FirstName</th>
								<th>LastName</th>
								<th>UserName</th>
								<th>Delete</th>
								<th>Update</th>

								@foreach($users as $user)
									<tr>
										<td>{{$user->firstname}}</td>
										<td>{{$user->lastname}}</td>
										<td>{{$user->username}}</td>
										<td><a href="{{route('user_delete',['id' => encrypt($user->id)])}}"> <i class="entypo-trash"></i></a></td>


										<td><a href="{{route('update_user',['id' => encrypt($user->id)])}}"> <i class="entypo-list"></i></a></td>
									</tr>
								@endforeach

								{!!$users->links()!!}

							</table>
					</div>
					
				</div>
			
			</div>
		</div>



@endif



@stop