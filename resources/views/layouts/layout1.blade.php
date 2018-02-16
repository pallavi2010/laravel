
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts.elements.layoutcss')

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  @yield('style')
   <!-- Header  -->
   @include('layouts.elements.header')
   <!-- Left side column. contains the logo and sidebar -->

   <!-- sidebar -->
   @include('layouts.elements.sidebar')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('pagehead')
    </section>

    <!-- Main content -->
    <section class="content">
      
      @yield('content')
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.elements.footer')
  <!-- Control Sidebar -->
  
  <!-- controlsidebar -->
  @include('layouts.elements.controlsidebar')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 @include('layouts.elements.layoutjs')
  @yield('script')
</body>
</html>
