<div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <a href="#" class="d-flex justify-content-center">
                <img src="<?=base_url('assets/images/logo-dark.svg')?>" alt="image" class="img-fluid brand-logo">
              </a>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <div class="auth-header">
                    <h2 class="text-secondary mt-5"><b>Hi, Welcome Back</b></h2>
                    <p class="f-16 mt-2">Enter your credentials to continue</p>
                  </div>
                </div>
              </div>
              <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_login')?>"method="POST">
              <h5 class="my-4 d-flex justify-content-center">Sign in</h5>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="Username" placeholder="Username" >
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput1" name="Password" placeholder="Password" >
                <label for="floatingInput1">Password</label>
              </div>
              <div class="d-flex mt-1 justify-content-between">
                <div class="form-check">
                  <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="" >
                  <label class="form-check-label text-muted" for="customCheckc1">Remember me</label>
                </div>
                <h5 class="text-secondary">Forgot Password?</h5>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-secondary">Sign In</button>
              </div>
              <hr >
             
              <a href="<?= base_url('home/akun')?>">Create an account</a></p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>