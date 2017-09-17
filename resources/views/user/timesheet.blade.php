
@section('head')

   

@stop
@extends('master.base',array('userData'=>$userData))

@section('main')
  	<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Timesheet</h1>
        </section>

        <section class="content">
      		<div class="row">
        		<div class="col-md-12">
        			<div class="box box-info">
			            <div class="box-header with-border">
			              <h3 class="box-title">Fill Timesheet</h3>
			            </div>
			            {!! Form::open(array('route' => 'handleLogin', 'role'=>'form', 'id'=>'login_form', 'class'=>'form-horizontal','novalidate'=>'novalidate')) !!}
				            <div class="box-body">
					            <div class="col-md-6">
					                <div class="form-group">
					                  	<label for="inputEmail3" class="col-sm-2 control-label">Client</label>
					                  	<div class="col-sm-8">
					                  		{!! Form::select('id_client', ["Infosys","TCS","Wipro"],'', $attributes = array('class' => 'form-control','id'=>'id_client')); !!}
					                 	</div>
					                </div>
					                <div class="form-group">
					                  	<label for="inputEmail3" class="col-sm-2 control-label">Project</label>
					                  	<div class="col-sm-8">
					                  		{!! Form::select('id_project', ["School Management","Hospital Management","Hotel Management"],'', $attributes = array('class' => 'form-control','id'=>'id_project')); !!}
					                 	</div>
					                </div>
					                <div class="form-group">
					                  	<label for="inputEmail3" class="col-sm-2 control-label">Task</label>
					                  	<div class="col-sm-8">
					                  		{!! Form::select('id_task', ["Modify","Bug Fixes","Revert"],'', $attributes = array('class' => 'form-control','id'=>'id_task')); !!}
					                 	</div>
					                </div>
					            </div>  
					            <div class="col-md-6">
					                <div class="form-group">
					                  	<label for="inputEmail3" class="col-sm-2 control-label">Date</label>
					                  	<div class="col-sm-4">
					                  		{!! Form::select('id_client', ["Infosys","TCS","Wipro"],'', $attributes = array('class' => 'form-control','id'=>'id_client')); !!}
					                 	</div>
					                </div>
					                <div class="form-group">
					                  	<label for="inputEmail3" class="col-sm-2 control-label">Project</label>
					                  	<div class="col-sm-4">
					                  		{!! Form::select('id_project', ["School Management","Hospital Management","Hotel Management"],'', $attributes = array('class' => 'form-control','id'=>'id_project')); !!}
					                 	</div>
					                </div>
					                <div class="form-group">
					                  	<label for="inputEmail3" class="col-sm-2 control-label">Task</label>
					                  	<div class="col-sm-4">
					                  		{!! Form::select('id_task', ["Modify","Bug Fixes","Revert"],'', $attributes = array('class' => 'form-control','id'=>'id_task')); !!}
					                 	</div>
					                </div>
					            </div>    
				            </div>
				              <!-- /.box-body -->
				              <div class="box-footer">
				                <button type="submit" class="btn btn-info">Save</button>
				                
				              </div>
            			{!! Form::close() !!}
			        </div>
        		</div>
        	</div>
        </section>		
    </div>  


@stop

@section('scripts')
   @parent

   <script>
      $(document).ready(function() {
     
      });
   </script>
@stop
