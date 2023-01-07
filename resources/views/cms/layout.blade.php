<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../cms/img/favicon.ico" rel="icon">
    <title>Salesmore - Dashboard</title>
    <link href="../cms/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../cms/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../cms/css/ruang-admin.min.css" rel="stylesheet">
    <link href="../cms/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../cms/css/custom.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->


        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon">
                    <img src="">
                </div>
                <div class="sidebar-brand-text mx-3">SalesMore </div>
            </a>


            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pages
            </div>

            <li class="nav-item">
                <a class="nav-link" href="/admin-home">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sliders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Categories">
                    <ion-icon name="apps-outline"></ion-icon>
                    <span>Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Products">
                    <ion-icon name="file-tray-stacked-outline"></ion-icon>
                    <span>Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin-quotations">
                    <ion-icon name="document-outline"></ion-icon>
                    <span>Quotation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <span>Profile</span>
                </a>
            </li>
            @if (Auth::user()->role == '0')
                <li class="nav-item">
                    <a class="nav-link" href="/users">
                        <ion-icon name="people-outline"></ion-icon>
                        <span>Users</span>
                    </a>
                </li>
            @endif
            <hr class="sidebar-divider">
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item dropdown no-arrow">
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="/Admin-Quatations">Read
                                    More Quotations</a>
                            </div>
                        </li> --}}

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../cms/img/logo.png"
                                    style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">Admin </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a> --}}
                                <a class="dropdown-item" href="/profile">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="col-md-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    </div>

                    <div style="min-height: 87vh; overflow-y:auto; overflow-x:hidden">
                        @yield('main')
                    </div>

                    <!--Row-->


                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Notice!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to leave this page?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="/quit" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            {{-- <footer class="sticky-footer bg-white">

        <div class="container my-auto py-2">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="#" target="_blank">Sales More</a></b>
            </span>
          </div>
        </div>
      </footer> --}}
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="../cms/vendor/jquery/jquery.min.js"></script>
    <script src="../cms/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../cms/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../cms/js/ruang-admin.min.js"></script>
    <script src="../cms/vendor/chart.js/Chart.min.js"></script>
    <script src="../cms/js/demo/chart-area-demo.js"></script>
    {{-- <script src="https://use.fontawesome.com/a435b719f1.js"></script> --}}

    <!-- Page level plugins -->
    <script src="../cms/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../cms/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script> --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('btext', {
            filebrowserUploadUrl: "{{ route('ck.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        // var editor = CKEDITOR.replace('btext', {
        //     filebrowserUploadUrl: "{{ route('ck.upload', ['_token' => csrf_token()]) }}",
        //     filebrowserUploadMethod: 'form'
        // });
        // CKFinder.setupCKEditor(editor);
    </script>
    @yield('scripts')

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
</body>

</html>
