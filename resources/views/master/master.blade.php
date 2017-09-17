<?php
  //$currentUrl = Request::url();
  $currentPath = Request::path();
   
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  


    @include('master.pagetitles.titles',array('currentPath'=>$currentPath))
  
   	<!-- Bootstrap 3.3.7 -->
  	{!!Html::style('assets/plugins/bootstrap/dist/css/bootstrap.min.css')!!}

  	<!-- Font Awesome -->
  	{!!Html::style('assets/plugins/font-awesome/css/font-awesome.min.css')!!}

  	<!-- Ionicons -->
  	{!!Html::style('assets/plugins/Ionicons/css/ionicons.min.css')!!}

  	<!-- Theme style -->
  	{!!Html::style('assets/dist/css/AdminLTE.min.css')!!}
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
   	{!!Html::style('assets/dist/css/skins/_all-skins.min.css')!!}   

  	<!-- Morris chart -->
  	{!!Html::style('assets/plugins/morris.js/morris.css')!!} 

    <!-- jvectormap -->
  	{!!Html::style('assets/plugins/jvectormap/jquery-jvectormap.css')!!} 
  	
  	<!-- Date Picker -->
  	{!!Html::style('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')!!} 
  	
  	<!-- Daterange picker -->
  	{!!Html::style('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')!!} 
  


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   @yield('head')
</head>


@section('scripts')

  <!-- jQuery 3 -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- daterangepicker -->
<script src="assets/plugins/moment/min/moment.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- Slimscroll -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

@show

</body>
</html>

