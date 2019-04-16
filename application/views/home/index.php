
<body class="bg1">
  <div class="container bg-transparent">
    <div class="row bg-transparent">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto bg-transparent">
        <div class="card card-signin my-5 bg-transparent">
          <div class="card-body bg-transparent">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="">
              <div class="form-label-group">
                <input type="text" id="email" class="form-control" placeholder="Email address" name="email" required autofocus>
                <label for="email">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" name="login" style="">Sign in</button>
              <!-- <a href="<?= base_url(); ?>Timeline" class="btn btn-lg btn-primary btn-block text-uppercase ">Sign in</a> -->
              <p class="mt-4 text-center">belum punya akun?</p>
              <a class="btn btn-lg btn-danger btn-block text-uppercase" href="<?= base_url(); ?>registration" name="registrasi">Registrasi</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   

</body>
</html> 