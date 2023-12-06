<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../admin/assets/images/icon.png" />
  </head>
  <body>
    
      @include('admin.partail')
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          {{-- profile  --}}
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../admin/assets/images/faces/face20.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">User name</h5>{{-- {{ $user->name }} --}}
                   <span>User type</span>{{--{{ $user->usertype }} --}}
                </div>
              </div>
              
            </div>
          </li>
          {{-- profile end --}}
          {{-- navigation --}}
            <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/posts">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Зарууд</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="/posts/create">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Зар оруулах</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/users">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Бүртгэлтэй хэрэглэгчид</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href={{route('product.create')}}>
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Бараа оруулах</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('product.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Дэлгүүр</span>
            </a>
          </li>
          {{-- end navigation --}}
        </ul>
      
      <!-- page-body-wrapper ends -->
    </div>
    </nav>      
        <div class="main-panel">
          <div class="content-wrapper">
           
          <footer class="footer">
             @yield('content')
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Trzn.com 2020</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../admin/assets/js/off-canvas.js"></script>
    <script src="../admin/assets/js/hoverable-collapse.js"></script>
    <script src="../admin/assets/js/misc.js"></script>
    <script src="../admin/assets/js/settings.js"></script>
    <script src="../admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>