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
		
									<a href="forms-main.html">Post Managemnet</a>
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
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('edit_post')}}" method="POST" enctype="multipart/form-data">
				
							{{csrf_field()}}
													
							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">
								
									<input type="hidden" name="post_id" value="{{encrypt($post->id)}}">

																	<div>	

									<div>
										<select class="form-control" name="type">
											<option selected disabled> Select Post Type</option>

											<option value="announcement" {{$post->type == 'announcement' ? 'selected' : ''}}>Announcement</option>
											<option value="article" {{$post->type == 'article' ? 'selected' : ''}}>Article</option>
										</select>	
									</div>

									                        @if($errors)
                            <strong style="color:red">{{$errors->first('type')}}</strong>
                        @endif


								</div>	





									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="Title" name="title" value="{{$post->title}}">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>
											
									</div>
									                        @if($errors)
                            <strong style="color:red">{{$errors->first('title')}}</strong>
                        @endif


								<div>	

									<div>
										<select class="form-control" name="filetype">
											<option selected disabled> Select File Type</option>

<option value="doc" {{$post->file_type == 'doc' ? 'selected' : ''}}>Document</option>
											<option value="image" {{$post->file_type == 'image' ? 'selected' : ''}}>Image</option>
										</select>	
									</div>

									                        @if($errors)
                            <strong style="color:red">{{$errors->first('filetype')}}</strong>
                        @endif

								</div>	


							</div></div><br>

							<h3>
							 Content
							</h3>
							

							<textarea name="content" class="form-control" data-uk-markdownarea="{mode:'tab'}">
								{!!$post->content!!}
							</textarea><br>
							                        @if($errors)
                            <strong style="color:red">{{$errors->first('content')}}</strong>
                        @endif


							<div class="form-control">
								<input type="file" name="file">
							</div>

							<br>

							<button class="btn btn-primary" type="submit">Update Post</button>
							
						
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
						
						<form role="form" class="form-horizontal form-groups-bordered" action="{{route('save_post')}}" method="POST" enctype="multipart/form-data">
				
							{{csrf_field()}}
													
							<div class="form-group">								
								<div class="col-sm-5 col-md-12 col-lg-12">

								<div>	

									<div>
										<select class="form-control" name="type">
											<option selected disabled> Select Post Type</option>

											<option value="announcement">Announcement</option>
											<option value="article">Article</option>
										</select>	
									</div>

									                        @if($errors)
                            <strong style="color:red">{{$errors->first('title')}}</strong>
                        @endif


								</div>	


								
									<div>
										<div class="input-group minimal">
											<input type="text" class="form-control" placeholder="Title" name="title">
											<span class="input-group-addon"><i class="entypo-info"></i></span>

										</div>
											
									</div>
									                        @if($errors)
                            <strong style="color:red">{{$errors->first('title')}}</strong>
                        @endif


								<div>	

									<div>
										<select class="form-control" name="filetype">
											<option selected disabled> Select File Type</option>

											<option value="doc">Document</option>
											<option value="image">Image</option>
										</select>	
									</div>

                        @if($errors)
                            <strong style="color:red">{{$errors->first('filetype')}}</strong>
                        @endif

								</div>	


							</div></div><br>

							<h3>
							 Content
							</h3>
							

							<textarea name="content" class="form-control" data-uk-markdownarea="{mode:'tab'}"></textarea><br>
							                        @if($errors)
                            <strong style="color:red">{{$errors->first('content')}}</strong>
                        @endif

							<div class="form-control">
								<input type="file" name="file">
							</div>

							<br>

							<button class="btn btn-primary" type="submit">Create Post</button>
							
						
						</form>
						
					</div>
					
				</div>
			
			</div>
		</div>



@endif



@stop