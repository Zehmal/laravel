
@section('head')

   

@stop
@extends('master.base',array('userData'=>$userData))

@section('main')
  

@stop

@section('scripts')
   @parent

   <script>
      $(document).ready(function() {
     
      });
   </script>
@stop
