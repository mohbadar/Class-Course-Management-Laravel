@extends('website.layout.master')

@section('title', 'Register Subcriber')

@section('content')


    <div class="row">
       
        <hr />



        <div class="row">
            <div class="col-sm-8">

                <h4 class="page-header">Subscriber to our community</h4>
                <form role="form" method="POST" action="{{route('subscriber_register')}}">

                	{{csrf_field()}}

                    <div class="form-group float-label-control">
                        <label for="">FirstName</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Username">
                        @if($errors)
                            <strong style="color:red">{{$errors->first('firstname')}}</strong>
                        @endif

                    </div>
                    <div class="form-group float-label-control">
                        <label for="">LastName</label>
                        <input type="text" class="form-control" name="lastname" placeholder="LastName">

                        @if($errors)
                            <strong style="color:red">{{$errors->first('lastname')}}</strong>
                        @endif
                    </div>


                                        <div class="form-group float-label-control">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address">

                        @if($errors)
                            <strong style="color:red">{{$errors->first('email')}}</strong>
                        @endif
                    </div>



                    <div class="form-group float-label-control">
                        <label for="">Phone No.</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone No.">

                        @if($errors)
                            <strong style="color:red">{{$errors->first('phone')}}</strong>
                        @endif
                    </div>


                    <div class="form-group float-label-control">
                        <label for="">Year</label>
                        <input type="number" class="form-control" name="year" placeholder="Year">

                        @if($errors)
                            <strong style="color:red">{{$errors->first('year')}}</strong>
                        @endif
                    </div>

                     <div class="form-group float-label-control">
                        <label for="">Semester</label>
                        <input type="number" class="form-control" name="semester" placeholder="Semester">

                        @if($errors)
                            <strong style="color:red">{{$errors->first('semester')}}</strong>
                        @endif
                    </div>


                 <div class="form-group float-label-control">
                        <label for="">Biograpgy Summary</label>
                        <textarea class="form-control" name="bio" placeholder="Biograpgy Summary"></textarea>

                        @if($errors)
                            <strong style="color:red">{{$errors->first('bio')}}</strong>
                        @endif
                    </div>




                    <div class="form-group float-label-control">
                        	<button class="btn custom-btn" type="submit">Subscribe</button>
                    </div>

                </form>



            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Instruction
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>FirstName is required</li>
                            <li>LastName is required</li>
                            <li>Email Address is required</li>
                            <li>Phone  is optional</li>
                            <li>Year is required</li>
                            <li>Semester is required</li>
                            <li>All Inputs should be alpha-numeric</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop