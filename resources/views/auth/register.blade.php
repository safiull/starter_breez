
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    {{-- All css file  --}}
    @include('layouts.partials.main_css')
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control p_input" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                    <div class="invalid-feedback">
                        Please enter your name.
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control p_input" name="username" value="{{ old('username') }}" required placeholder="Username">
                    <div class="invalid-feedback">
                        Please enter your username.
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input" name="email" value="{{ old('email') }}" required placeholder="Email">
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password"  autocomplete="new-password" required placeholder="Password">
                    <div class="invalid-feedback">
                        Please enter a password.
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control p_input" type="password" name="password_confirmation" required placeholder="Confirm password">
                    <div class="invalid-feedback">
                        Please enter confirm password.
                    </div>
                  </div>
                  
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="remember"> {{ __('Remember me') }} </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>

                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  {{-- <p class="sign-up text-center">Already have an Account?<a href="#"> Sign Up</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p> --}}
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    {{-- All js file  --}}
    @include('layouts.partials.main_js')

    {{-- Validation  --}}
    @include('components.frontend-validation')

    
  </body>
</html>