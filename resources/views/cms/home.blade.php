
@extends('cms.layout.master')
@section('title', 'Home')


@section('content')

		<hr />
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">Forms</a>
							</li>
						<li class="active">
		
									<strong>Editors</strong>
							</li>
							</ol>
					
		
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Form
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						
						<form role="form" class="form-horizontal form-groups-bordered">
			
													
							<div class="form-group">
								<label class="col-sm-3 control-label">Form Inputs</label>
								
								<div class="col-sm-5">
									<div class="input-group minimal">
										<input type="text" class="form-control" placeholder="Email">
										<span class="input-group-addon"><i class="entypo-mail"></i></span>
									</div>
									
									<br />
									
									<div class="input-group minimal">
										<input type="text" class="form-control" placeholder="Username">
										<span class="input-group-addon"><i class="entypo-info"></i></span>
									</div>
								</d
							</div>
							
						
						</form>
						
					</div>
					
				</div>
			
			</div>
		</div>
		
		
		
		
	
		<h2>
		 Editor
		</h2>
		
		<textarea class="form-control" data-uk-markdownarea="{mode:'tab'}">#Heading
		
		Lorem ipsum dolor sit **amet**, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. [This is a link](#)
		
		* Item
		* Item
		* Item
		
		## Heading
		
		Ut enim ad *minim* veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		
		<a href="#">HTML syntax highlightning</a>
		
		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
		<!-- Footer -->

@stop