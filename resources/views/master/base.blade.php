<?php
  //$currentUrl = Request::url();
  $currentPath = Request::path();
  $today = date("l, F j, Y");
  
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

<body class="hold-transition skin-blue sidebar-mini">
  <div class="">
      <header class="main-header">
          <!-- Logo for larger and small screens-->
          @include('master.logo.logo')

          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
             
              <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    @include('master.messages_notifications_task_menu.messages',array('today'=>$today))
                    
                    <!-- Notifications: style can be found in dropdown.less -->
                    @include('master.messages_notifications_task_menu.notifications')
          
                    <!-- Tasks: style can be found in dropdown.less -->
                    @include('master.messages_notifications_task_menu.task')

                    <!-- User Account: style can be found in dropdown.less -->
                    @include('master.user_accounts_menu.useraccounts',array('userData'=>$userData))
          
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                      <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                  </ul>
              </div>
          </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
    
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel -->
          @include('master.user_accounts_menu.useraccounts_leftside',array('userData'=>$userData))
         
      
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            
              <!-- Dashboard -->
              @include('master.side_menus.user_dashboard',array('currentPath'=>$currentPath))

              <!-- Timesheet -->
              @include('master.side_menus.user_timesheet',array('currentPath'=>$currentPath))
        
        
          </ul>
        </section>
   
      </aside>

      
      @yield('main')
  </div>
 

@section('scripts')

  <!-- jQuery 3 -->
  {!!Html::script('assets/plugins/jquery/dist/jquery.min.js')!!}

  <!-- jQuery UI 1.11.4 -->
  <script src=""></script>
  {!!Html::script('assets/plugins/jquery-ui/jquery-ui.min.js')!!}

  <!-- Bootstrap 3.3.7 -->
  {!!Html::script('assets/plugins/jquery/dist/jquery.min.js')!!}

  <!-- daterangepicker -->
  {!!Html::script('assets/plugins/moment/min/moment.min.js')!!}
  {!!Html::script('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')!!}

  <!-- datepicker -->
  {!!Html::script('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')!!}

  <!-- Slimscroll -->
  {!!Html::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')!!}

  <!-- FastClick -->
  {!!Html::script('assets/plugins/fastclick/lib/fastclick.js')!!}

  <!-- AdminLTE App -->
  {!!Html::script('assets/dist/js/adminlte.min.js')!!}

@show

</body>
</html>

