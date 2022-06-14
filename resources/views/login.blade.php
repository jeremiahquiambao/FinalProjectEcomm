<!DOCTYPE html>

<html>
  <head>
    <!-- modify page title -->
    <title>Klosette Co.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <style>
      *:not(i) {
        color: rgb(43, 49, 55) !important;
        font-family: 'Manrope', sans-serif;
      }

      .form-label {
        font-weight: 700;
        margin-bottom: 2px;
      }

      #left-pane-image {
        /* modify log in cover */
        background: url('/images/josue-ladoo-pelegrin-tCRb-uDMf80-unsplash.jpg');
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
      }

      #log-in-div {
        width: 350px;
      }

      #log-in-btn {
        background-color: rgb(255, 158, 2);
      }
    </style>

      <div class="row g-0 vh-100">
        <div id="left-pane-image" class="col col-12 col-md-6 p-5 d-none d-sm-none d-md-block">
            <div class="position-absolute bottom-0 mb-5">
                <p class="fs-1 fw-bold text-light">
                <!-- modify text -->
                2022 Summer Collection
                </p>
                <p class="text-light" style="margin-top: -20px;">
                <!-- modify text -->
                Shop the hottest finds now
                </p>
            </div>
      </div>
     
      <div class="col col-12 col-md-6 p-5">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div id="log-in-div">
            <!-- modify logo -->
            <img src="/images/temporary_logo_colored.png" width="200px" class="mb-4" />
            <p class="fw-bold fs-4">
                <!-- modify text -->
                Welcome to the Philippines' Largest Online Fashion Store
            </p>
            <p style="margin-top: -5px; font-size: 0.85rem !important" class="mb-5">
                <!-- modify text -->
                Please log in to start shopping
            </p>
            

            <!-- Email Address -->
            <form action="login" method="POST">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>

              <!-- Password -->
              <div class> 
                <label class="form-label" for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="mb-4">
              <button id="log-in-btn" type="submit" class="btn w-100 mt-4 text-light">Log In</button>
              </div>
            </form>
            <p style="text-align:center;font-weight:590;" >or</p>
            <form action="/register" method="GET">
            <button id="log-in-btn" type="submit" class="btn w-100 mt-4 text-light">Register</button>
            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
