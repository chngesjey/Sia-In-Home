<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Page</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('asset/login/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/login/bootstrap-social.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('asset/login/bootstrap.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets{{ asset('asset/login/components.css') }}">
  <link rel="stylesheet" href="assets{{ asset('asset/login/style.css') }}">
<!-- Start GA -->
<script async src="assets{{ asset('asset/login/bootstrap.min.js') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="https://play-lh.googleusercontent.com/OXg53GSgwZY7h3zQSha3TYq0d_9lQve94gaW_UKBSTaYLNI1v67K_jPl5a2Ue4BX1Y8=w600-h300-pc0xffffff-pd" alt="logo" width="350" class="shadow-light rounded-circle"> 
            </div>
            <br class="">
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
              <form method="post" action="/postlogin" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Tolong Isi Alamat Email !!
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
            <div class="simple-footer text-center">
                Copyright &copy; SMK Antartika 1 Sidoarjo
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('asset/login/bootstrap.min.css') }}"></script>
  <script src="{{ asset('asset/login/bootstrap.min.css') }}"></script>
  <script src="{{ asset('asset/login/bootstrap.min.css') }}"></script>
  <script src="{{ asset('asset/login/bootstrap.min.css') }}"></script>
  <script src="{{ asset('asset/login/bootstrap.min.css') }}"></script>
  <script src="{{ asset('asset/login/bootstrap.min.css') }}"></script>
  <script src="{{ asset('asset/login/bootstrap.min.css') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('asset/login/scripts.js') }}"></script>
  <script src="{{ asset('asset/login/custom.js') }}"></script>
</body>
</html>