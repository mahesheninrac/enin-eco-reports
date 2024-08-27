<?php require(APPPATH . 'views/header.php'); ?>
<section>
  <div class="container-fluid">
    <div class="row min-vh-100">
      <div class="col-md-6 bg-light-gray d-flex flex-column justify-content-center pb-3 bg-primary-300">
        <div class="mx-auto w-100" style="max-width: 26.62rem;">
          <div class="d-md-none mb-3" style="background-image: url('https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262167/assets/login/fn7ivzeowadop4aega5o.svg'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 8.75rem;">
            <div class="w-100 mx-auto px-3">
              <h3 class="text-sm text-bright-purple">RHO MOTION</h3>
              <h1 class="display-5 text-purple">Membership</h1>
            </div>
          </div>
          <div class="pt-3 px-3">
            <div class="d-none d-md-block">
              <h3 class="h4 text-bright-purple">RHO MOTION</h3>
              <h2 class="display-1 text-purple">Membership</h2>
            </div>
            <p class="text-sm text-purple mb-4">Welcome back, please log in to your account</p>
            <form action="" method="POST">
              <input type="hidden" name="_token">
              <div class="mb-2">
                <label for="username" class="sr-only ">Username</label>
                <input data-testid="username-input" id="username" name="log" type="text" autocomplete="username" placeholder="Username" required class="form-control bg-white py-3">
              </div>
              <div class="mb-2">
                <label for="password" class="sr-only">Password</label>
                <input data-testid="password-input" id="password" name="pwd" type="password" autocomplete="current-password" placeholder="Password" required class="form-control py-3">
              </div>
              <div class="d-flex justify-content-between mt-3 mb-4">
                <div class="form-check">
                  <input id="remember_me" name="remember_me" type="checkbox" class="form-check-input">
                  <label for="remember_me" class="form-check-label">Remember me</label>
                </div>
                <div class="text-sm">
                  <a href="/recover-password" class="text-grey font-medium">Forgot password?</a>
                </div>
              </div>
              <div>
                <button type="submit" data-testid="login-button" class="btn btn-primary text-white py-2 px-4 rounded-md">Login</button>
              </div>
            </form>
            <div class="mt-4 min-width-max-content ">
              <h4 class="fw-bold">Having trouble logging in </h4>
              <p class="text-purple text-sm">Contact us at +44 (0) 203 988 7648 or info@rhomotion.com</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-6 bg-lighter-lavender d-none d-md-block bg-primary-200" style="background-image: url('https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702333631/assets/login/xswlst3ycfqof9l7qwwh.svg'); background-repeat: no-repeat; background-position: center; background-size: 50vw 51.75rem;"></div> -->
      <div class="col-md-6 bg-lighter-lavender d-none d-md-block bg-primary-200" style="background-image: url('https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702333631/assets/login/xswlst3ycfqof9l7qwwh.svg'); background-repeat: no-repeat; background-position: center; background-size: 50vw 51.75rem;"></div>
    </div>
  </div>

</section>
<?php require(APPPATH . 'views/footer.php'); ?>