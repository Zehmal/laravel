@section('head')

   

@stop
@extends('master.master')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>WCM</b> Agency</a>
  </div>
  <!-- /.login-logo -->
  

    {!! Form::open(array('route' => 'handleLogin', 'role'=>'form', 'id'=>'login_form', 'class'=>'','novalidate'=>'novalidate')) !!}
    	<div class="login-box-body">
    		<p class="login-box-msg">Sign in </p>
	    	<div class="form-group has-feedback">
	        	<input type="email" class="form-control" placeholder="Email" name="email">
	        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      	</div>
	      	<div class="form-group has-feedback">
	        	<input type="password" class="form-control" placeholder="Password" name="password">
	        	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      	</div>
	      	<div class="row">
	            <div class="col-xs-4">
		          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
		        </div>
	        </div>
	        <a href="#">I forgot my password</a><br>
    		<a href="register.html" class="text-center">Register a new membership</a>
        </div>

    {!! Form::close() !!}
            

</div>
<!-- /.login-box -->

@section('scripts')
   @parent

@stop    
