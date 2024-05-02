<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      /* semi-transparent white background */
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      /* ensure it appears above other content */
    }

    .fade-in-loader {
      opacity: 1;
      transition: opacity 0.5s ease-in;
    }
  </style>
</head>

<body>
  <div id="loader">
    <img src="assets/images/loader.svg" height="60" width="60" alt="">
  </div>
  <section class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="text-center mb-3">
                <a href="/dittoweb.com">
                  <img src="<?php echo base_url('/assets/images/logoblue.png'); ?>" alt="Ditto Logo" width="160" height="90">
                </a>
              </div>
              <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>
              <?php echo $errormessage??""; ?>
              <form action="/dittoweb.com/login" method="post">
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                      <label for="email" class="form-label">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                      <label for="password" class="form-label">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="rememberMe">
                        <label class="form-check-label text-secondary" for="rememberMe">
                          Keep me logged in
                        </label>
                      </div>
                      <a href="#!" class="link-primary text-decoration-none">Forgot password?</a>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="m-0 text-secondary text-center">Don't have an account? <a href="/register" class="link-primary text-decoration-none">Sign up</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>  
        </div>
      </div>
    </div>
    
  </section>
  <script>
    
    function showLoader() {
      const loader = document.getElementById('loader');
      loader.style.display = 'flex';
      setTimeout(function() {

        loader.classList.add('fade-in-loader');
      }, 10);
    }
    
  </script>
</body>

</html>