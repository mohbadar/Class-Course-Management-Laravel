@extends('website.layout.master')

@section('title', 'Login')

@section('content')


    <div class="row">
       
        <hr />



        <div class="row">
            <div class="col-sm-8">

                <h4 class="page-header">Sign In to Administration Panel</h4>
                <form role="form" method="POST" action="{{route('signIn')}}">

                	{{csrf_field()}}

                    <div class="form-group float-label-control">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">

                        @if($errors)
                            <strong style="color:red">{{$errors->first('username')}}</strong>
                        @endif


                    </div>
                    <div class="form-group float-label-control">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">

                        @if($errors)
                            <strong style="color:red">{{$errors->first('password')}}</strong>
                        @endif
                    </div>

                    <div class="form-group float-label-control">
                        	<button class="btn custom-btn" type="submit">Login</button>
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
                            <li>Username is required</li>
                            <li>Password is required</li>
                            <li>Password should be at least 6 charaters</li>
                            <li>Password should be alpha-numeric</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop