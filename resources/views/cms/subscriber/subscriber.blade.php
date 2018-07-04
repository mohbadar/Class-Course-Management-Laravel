@extends('cms.layout.master')

@section('title' , 'Subscriber Management')


@section('content')


<!-- Tracker -->
		<hr />
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">Subscriber Managemnet</a>
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


@if(isset($isEmail))


<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Send Email to {{$subscriber->firstname. ' '. $subscriber->lastname}}
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body " >
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('send_email_to_subscriber')}}" method="POST" enctype="multipart/form-data">

							<input type="hidden" name="subscriber_id" value="{{encrypt($subscriber->id)}}">
				
							{{csrf_field()}}
													
							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">
								
									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="Subject" name="subject">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>
											
									</div>

						

							</div></div><br>

							<h3>
							 Body
							</h3>
							

							<textarea name="body" class="form-control" data-uk-markdownarea="{mode:'tab'}"></textarea><br>

							<div class="form-control">
								<input type="file" name="file">
							</div>

							<br>

							<button class="btn btn-primary" type="submit">Send Email</button>
							
						
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
							Subscriber Management
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
								<th>Phone</th>
								<th>Year</th>
								<th>Semester</th>
								<th>Send Email</th>
								<th>Delete</th>
							

								@foreach($subscribers as $subscriber)
									<tr>
										<td>{{$subscriber->firstname}}</td>
										<td>{{$subscriber->lastname}}</td>
										<td>{{$subscriber->phone}}</td>
										<td>{{$subscriber->year}}</td>
										<td>{{$subscriber->semester}}</td>

										<td><a href="{{route('send_email',['id' => encrypt($subscriber->id)])}}"> <i class="entypo-plus"></i></a></td>


										<td><a href="{{route('subscriber_delete',['id' => encrypt($subscriber->id)])}}"> <i class="entypo-trash"></i></a></td>



						
									</tr>
								@endforeach

								{!!$subscribers->links()!!}

							</table>
					</div>
					
				</div>
			
			</div>
		</div>



@endif



@stop