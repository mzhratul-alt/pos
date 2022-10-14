<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
      <title>Blank Page | PlainAdmin Demo</title>

      <!-- ========== All CSS files linkup ========= -->
      <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/main.css" />
      <style>
         body{
            padding: 0;
         }
      </style>
   </head>

   <body>

      <!-- ========== section start ========== -->
      <section class="section">
         <div class="container-fluid">

            <div class="main_content">
               <div class="row g-0 auth-row">
                  <div class="col-lg-6">
                     <div class="auth-cover-wrapper bg-primary-100">
                        <div class="auth-cover">
                           <div class="title text-center">
                              <h1 class="text-primary mb-10">Welcome Back</h1>
                              <p class="text-medium">
                                 Sign in to your Existing account to continue
                              </p>
                           </div>
                           <div class="shape-image">
                              <img src="assets/images/auth/shape.svg" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6">
                     <div class="signin-wrapper">
                        <div class="form-wrapper">
                           <h6 class="mb-15">Sign In Form</h6>
                           <p class="text-sm mb-25">
                              Start creating the best possible user experience for you
                              customers.
                           </p>
                           <form action="{{ route('admin.login') }}" method="POST" autocomplete="off">
                              @csrf
                              <div class="row">
                                 <div class="col-12">
                                    <div class="input-style-1">
                                       <label>Email</label>
                                       <input class="form-control @error('email')is-invalid @enderror" name="email" type="email" placeholder="Email" value="{{ old('email') }}">

                                       @error('email')
                                       <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!-- end col -->
                                 <div class="col-12">
                                    <div class="input-style-1">
                                       <label>Password</label>
                                       <input class="form-control @error('password')is-invalid @enderror" name="password" type="password" placeholder="Password">
                                       @error('password')
                                       <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                    </div>
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xxl-6 col-lg-12 col-md-6">
                                    <div class="form-check checkbox-style mb-30">
                                       <input class="form-check-input" type="checkbox" id="checkbox-remember" name="remember">
                                       <label class="form-check-label" for="checkbox-remember">
                                          Remember me next time</label>
                                    </div>
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xxl-6 col-lg-12 col-md-6">
                                    <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                       <a href="reset-password.html" class="hover-underline">
                                          Forgot Password?
                                       </a>
                                    </div>
                                 </div>
                                 <!-- end col -->
                                 <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                       <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                                          Sign In
                                       </button>
                                    </div>
                                 </div>
                              </div>
                              <!-- end row -->
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <!-- end container -->
      </section>
      <!-- ========== section end ========== -->


   </body>

</html>