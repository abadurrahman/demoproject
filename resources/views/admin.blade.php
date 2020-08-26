<!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>BanglaMap24</title>
   <!-- Favicon -->
   <link rel="icon" href="{{ asset('backend/assets/img/brand/favicon.png') }}" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
   <!-- Page plugins -->
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/select2/dist/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/quill/dist/quill.core.css')}}">
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">

   <link rel="stylesheet" type="text/css" href="css/app.css">
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{ asset('backend/assets/css/argon.css?v=1.1.0') }}" type="text/css">
    <!-- Ajax CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- sweet alerts -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/sweet-alert.min.css') }}">
    <!-- Toastr Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.css') }}">
    <!-- Ck Editor Css -->
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    @stack('css')
 </head>

 <body>
  <div id="app">
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
     <div class="scrollbar-inner">
       <!-- Brand -->
       <div class="sidenav-header d-flex align-items-center">
         <a class="navbar-brand" href="/pages/dashboards/dashboard.html">
           <img src="{{ asset('backend/assets/img/brand/logo.jpg') }}" class="navbar-brand-img" alt="...">
         </a>
         <div class="ml-auto">
           <!-- Sidenav toggler -->
           <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
             <div class="sidenav-toggler-inner">
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
             </div>
           </div>
         </div>
       </div>
       <div class="navbar-inner">
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
           <!-- Nav items -->
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link" href="">
                 <i class="ni ni-shop text-primary"></i>
                 <span class="nav-link-text">Dashboard</span>
               </a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="ni ni-archive-2 text-green"></i>
                  <span class="nav-link-text">Category</span>
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="collapse" id="navbar-examples">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Book Category</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="#categories" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="categories">
                                <i class="ni ni-single-copy-04 text-black"></i>
                                <span class="nav-link-text">Categories</span>
                            </a>
                            <div class="collapse" id="categories">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <router-link to="/add-category" class="nav-link ">Category</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">All Category</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#tags" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="tags">
                                <i class="ni ni-single-copy-04 text-black"></i>
                                <span class="nav-link-text">Tags</span>
                            </a>
                            <div class="collapse" id="tags">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">Add Tag</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">All Tag</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="user">
                                <i class="ni ni-single-copy-04 text-black"></i>
                                <span class="nav-link-text">User Role</span>
                            </a>
                            <div class="collapse" id="user">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">Create User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link ">All User</a>
                                    </li>
                                </ul>
                            </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="ni ni-archive-2 text-green"></i>
                  <span class="nav-link-text">Tags</span>
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="user">
                    <i class="ni ni-single-copy-04 text-black"></i>
                    <span class="nav-link-text">User Role</span>
                </a>
                <div class="collapse" id="user">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="" class="nav-link ">Create User</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link ">All User</a>
                        </li>
                    </ul>
                </div>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                 <i class="ni ni-app text-info"></i>
                 <span class="nav-link-text">Advertise</span>
               </a>
               <div class="collapse" id="navbar-components">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="" class="nav-link">Header Ads </a>
                   </li>
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">All Products</a>
                   </li>
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">Deactivated Products</a>
                   </li>
                 </ul>
               </div>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                 <i class="ni ni-single-02 text-pink"></i>
                 <span class="nav-link-text">Customers</span>
               </a>
               <div class="collapse" id="navbar-forms">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">Customers List</a>
                   </li>
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">Wholesaler List</a>
                   </li>
                 </ul>
               </div>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                 <i class="ni ni-archive-2 text-default"></i>
                 <span class="nav-link-text">Inventory</span>
               </a>
               <div class="collapse" id="navbar-tables">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">Inventory List</a>
                   </li>
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">Inventory Recive</a>
                   </li>
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">Inventory Move</a>
                   </li>
                   <li class="nav-item">
                     <a href="/pages/tables/Orders.html" class="nav-link">Purchase</a>
                   </li>
                 </ul>
               </div>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/pages/tables/Orders.html">
                 <i class="ni ni-archive-2 text-green"></i>
                 <span class="nav-link-text">RAM</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/pages/tables/Orders.html">
                 <i class="ni ni-badge text-info"></i>
                 <span class="nav-link-text">Coupons</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/pages/tables/Orders.html">
                 <i class="ni ni-circle-08 text-red"></i>
                 <span class="nav-link-text">Manage Staffs</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/pages/tables/Orders.html">
                 <i class="ni ni-bell-55 text-red"></i>
                 <span class="nav-link-text">Sebseriber</span>
               </a>
             </li>
            <li class="nav-item">
               <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                 <i class="ni ni-world text-primary"></i>
                 <span class="nav-link-text">Web Settings</span>
               </a>
               <div class="collapse" id="navbar-maps">
                 <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                     <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">General Settings</a>
                     <div class="collapse show" id="navbar-multilevel" style="">
                       <ul class="nav nav-sm flex-column">
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Logo</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Other Page</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Popup Banner</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Website Footer</a>
                         </li>
                       </ul>
                     </div>
                   </li>
                   <li class="nav-item">
                     <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Home Page Settings</a>
                     <div class="collapse show" id="navbar-multilevel" style="">
                       <ul class="nav nav-sm flex-column">
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Slider</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Featured Links</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Add Barnd</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Home Page Customization</a>
                         </li>
                       </ul>
                     </div>
                   </li>

                   <li class="nav-item">
                     <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">All Menu</a>
                     <div class="collapse show" id="navbar-multilevel" style="">
                       <ul class="nav nav-sm flex-column">
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Menu</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Categori</a>
                         </li>
                         <li class="nav-item">
                           <a href="#!" class="nav-link ">Sub Categori</a>
                         </li>
                       </ul>
                     </div>
                   </li>
                 </ul>
               </div>
             </li>
           </ul>

         </div>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
     <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
       <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <!-- Search form -->
           <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
             <div class="form-group mb-0">
               <div class="input-group input-group-alternative input-group-merge">
                 <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-search"></i></span>
                 </div>
                 <input class="form-control" placeholder="Search" type="text">
               </div>
             </div>
             <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </form>
           <div style="padding-left: 385px;">
            <a href="#" class="btn btn-secondary">View Website</a>
           </div>
           <!-- Navbar links -->
           <ul class="navbar-nav align-items-center ml-md-auto">
             <li class="nav-item d-xl-none">
               <!-- Sidenav toggler -->
               <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                 <div class="sidenav-toggler-inner">
                   <i class="sidenav-toggler-line"></i>
                   <i class="sidenav-toggler-line"></i>
                   <i class="sidenav-toggler-line"></i>
                 </div>
               </div>
             </li>
             <li class="nav-item d-sm-none">
               <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                 <i class="ni ni-zoom-split-in"></i>
               </a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="ni ni-bell-55"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                 <!-- Dropdown header -->
                 <div class="px-3 py-3">
                   <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                 </div>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="ni ni-ungroup"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                 <div class="row shortcuts px-4">
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                       <i class="ni ni-calendar-grid-58"></i>
                     </span>
                     <small>Calendar</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                       <i class="ni ni-email-83"></i>
                     </span>
                     <small>Email</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                       <i class="ni ni-credit-card"></i>
                     </span>
                     <small>Payments</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                       <i class="ni ni-books"></i>
                     </span>
                     <small>Reports</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                       <i class="ni ni-pin-3"></i>
                     </span>
                     <small>Maps</small>
                   </a>
                   <a href="#!" class="col-4 shortcut-item">
                     <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                       <i class="ni ni-basket"></i>
                     </span>
                     <small>Shop</small>
                   </a>
                 </div>
               </div>
             </li>
           </ul>
           <ul class="navbar-nav align-items-center ml-auto ml-md-0">
             <li class="nav-item dropdown">
               <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <div class="media align-items-center">
                   <span class="avatar avatar-sm rounded-circle">
                     <img alt="Image placeholder" src="{{ asset('backend/assets/img/theme/team-4.jpg') }}">
                   </span>
                   <div class="media-body ml-2 d-none d-lg-block">
                     <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                   </div>
                 </div>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 <div class="dropdown-header noti-title">
                   <h6 class="text-overflow m-0">Welcome!</h6>
                 </div>
                 <a href="/pages/examples/profile.html" class="dropdown-item">
                   <i class="ni ni-single-02"></i>
                   <span>My profile</span>
                 </a>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-settings-gear-65"></i>
                   <span>Settings</span>
                 </a>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-calendar-grid-58"></i>
                   <span>Activity</span>
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{ url('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 <i class="fa fa-sign-out fa-lg"></i>
                 <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                 @csrf
                </form>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>
     <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <router-view></router-view>
        </div>
      </div>
    </div>
   </div>
 </div>
</div>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{ asset('backend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
   <!-- <script src="{{ asset('backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> -->
   <script src="{{ asset('backend/assets/vendor/js-cookie/js.cookie.js') }}"></script>
   <script src="{{ asset('backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
   <script src="{{ asset('backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{asset('backend/assets/vendor/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

    <!-- Datatable JS -->
    <script src="{{asset('backend/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>

    <script src="/js/app.js" type="text/javascript"></script>
   <!-- Argon JS -->
   <script src="{{ asset('backend/assets/js/argon.js?v=1.1.0') }}"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="{{ asset('backend/assets/js/demo.min.js') }}"></script>

   <!-- Toastr -->
   <script src="{{asset('backend/assets/js/toastr.min.js')}}"></script>

   <script type="text/javascript">
       @if(Session::has('message'))
       var type = "{{Session::get('alert-type', 'info')}}"
       switch (type) {
           case 'info':
               toastr.info("{{ Session::get('message') }}");
               break;
           case 'success':
               toastr.success("{{ Session::get('message') }}");
               break;
           case 'warning':
               toastr.warning("{{ Session::get('message') }}");
               break;
           case 'error':
               toastr.error("{{ Session::get('message') }}");
               break;
       }
       @endif

   </script>

   <!-- sweet alerts -->
   <script src="{{asset('backend/assets/js/sweetalert.min.js')}}"></script>
   <script>
       $(document).on("click", "#delete", function(e) {
           e.preventDefault();
           var link = $(this).attr("href");
           swal({
                   title: "Are you sure?"
                   , text: "Once deleted, you will not be able to recover this file!"
                   , icon: "warning"
                   , buttons: true
                   , dangerMode: true
               , })
               .then((willDelete) => {
                   if (willDelete) {
                       window.location.href = link;
                   }
               });
       });

   </script>
   <script>
       $(document).on("click", "#edit", function(e) {
           e.preventDefault();
           var link = $(this).attr("href");
           swal({
                   title: "Are you sure?"
                   , text: "Any Change can not be undo."
                   , icon: "info"
                   , buttons: true
                   , dangerMode: true
               , })
               .then((willEdit) => {
                   if (willEdit) {
                       window.location.href = link;
                   }
               });
       });

   </script>

   @stack('scripts')
 </body>

 </html>
