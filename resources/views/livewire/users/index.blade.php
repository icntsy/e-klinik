<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.admin.partials.title')
    <!-- plugins:css -->
    <link rel="stylesheet" href="example/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="example/template/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="example/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="example/template/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="example/template/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="example/template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="example/template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="example/template/images/favicon.png" />
    <link rel="stylesheet" href="example/template/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container-scroller">
        <!-- partial:example/template/partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="./example/template/images/logoo.png" style="height: 50px; width: 70px;"
                            alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="./example/template/images/logo-mini.svg" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text"><span class="text-black fw-bold">Master Data User</span></h1>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form class="search-form" action="#">
                            <i class="icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                        </form>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="img-xs rounded-circle" src="./example/template/images/faces/face8.jpg"
                                alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="./example/template/images/faces/face8.jpg"
                                    alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
                                <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                            </div>
                            <a class="dropdown-item"><i
                                    class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                                Profile</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="dropdown-item-icon mdi mdi-power text-primary me-2"></i> Sign
                                    Out</button>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:example/template/partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:example/template/partials/_sidebar.html -->
            @include('layouts.admin.partials.menu')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="template-demo mt-2">
                                        <div class="col-md-6 col-sm-12">
                                            <a href="/user/create" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-account-plus"></i> Tambah Data</a>
                                        </div>
                                        {{-- <button type="button" class="btn btn-outline-primary btn-icon-text">
                                            <i class="mdi mdi-account-plus"></i>
                                            Tambah Data
                                        </button> --}}
                                    </div>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="px-3 py-3">
                                                        No
                                                    </th>
                                                    <th>
                                                        Nama Lengkap
                                                    </th>
                                                    <th>
                                                        Email User
                                                    </th>
                                                    <th>
                                                        Type User
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td>
                                                            {{ $user->name }}
                                                        </td>
                                                        <td>
                                                            {{ $user->email }}
                                                        </td>
                                                        <td>
                                                            {{ $user->role }}
                                                        </td>
                                                        <td>
                                                            <a href=""><i class="mdi mdi-tooltip-edit px-2"
                                                                    style="font-size: 20px"></i></a>
                                                            <form action="/user/{{ $user->id }}" method="post" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="border-0 bg-white" onclick="return confim('Yakin Hapus Data?')"><i
                                                                        class="mdi mdi-delete text-primary"
                                                                        style="font-size: 20px"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:example/template/partials/_footer.html -->
                @include('layouts.admin.partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="example/template/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="example/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="example/template/js/off-canvas.js"></script>
    <script src="example/template/js/hoverable-collapse.js"></script>
    <script src="example/template/js/template.js"></script>
    <script src="example/template/js/settings.js"></script>
    <script src="example/template/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
    <script src="example/template/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script type="text/javascript">
        $(function(){
            $(document).on('click', 'delete', function(e){

            })
        });
    </script> --}}
</body>
</html>
