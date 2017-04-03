<!DOCTYPE html>
<html>
<head>
  @include('backend.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- header -->
  @include('backend.includes.header')
  <!-- end -->
  <!-- Left side column. contains the logo and sidebar -->
  @include('backend.includes.left_sidebar')
  <!-- End left side -->
  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  @include('backend.includes.footer')
  @include('backend.includes.right_sidebar')

</div>
<!-- ./wrapper -->
</body>
</html>
