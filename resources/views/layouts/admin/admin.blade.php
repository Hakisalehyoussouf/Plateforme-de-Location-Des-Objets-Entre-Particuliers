<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>


    
    
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>-->



      
    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset(' admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href=" {{ asset('admin/images/favicon.png') }}" />


    <!--<style>
      body {
        background-color:#F7F5F2;
      }
    </style>-->
    <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}">-->

  </head>


  <body>

  <div class="container-scroller">
    @include('layouts/admin/navbar')

    <div class="container-fluid page-body-wrapper">
      @include('layouts/admin/sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

              @yield('contenu')

          </div>
        </div>

    </div>
  </div>















  
 <!-- @yield('contenu');-->




  <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->


  <!-- Plugin js for this page-->
  <!--<script src="vendors/chart.js/Chart.min.js"></script>-->
  <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->


  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/template.js') }}"></script>
  <!-- endinject -->


  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/dashboard.js') }} "></script>
  <script src="{{ asset('admin/js/data-table.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/js/dataTables.bootstrap4.js')}} "></script>
  <!-- End custom js for this page-->

    

  <!--<script src="js/jquery.cookie.js" type="text/javascript"></script>-->


  
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>-->
  <!--<script src="js/script.js"></script>-->

  </body>
</html>