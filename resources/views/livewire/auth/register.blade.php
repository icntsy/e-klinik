<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-Klinik Laa-Tachzan - {{ $title }}</title>
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
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- <div class="brand-logo"> -->
                <img src="example/template/images/logo.png" style="height: 100px; width: 100px;" alt="logo" wi>
              <!-- </div> -->
              <h4>Welcome to Laa-Tachzan E-clinic</h4>
              <h6 class="fw-light">Registration Form</h6>
              <form action="/register" method="post" class="pt-3">
                @csrf
                <div class="form-group">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid
                  @enderror" id="name" placeholder="Name" required value="{{ old ('name') }}">
                  @error('name')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid
                  @enderror"  id="email" placeholder="name@example.com" required value="{{ old ('email') }}">
                  @error('email')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="password" class="form-label">Enter password</label>
                  <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid
                  @enderror" id="password" placeholder="Password" required>
                  @error('password')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check form-check-success">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked>
                          Keep me signed in
                        </label>
                      </div>

                    <a href="/login" class="auth-link text-black">Login?</a>
                  </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">SIGN UP</button>
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="example/template/index.html">SIGN IN</a> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
</body>

</html>
