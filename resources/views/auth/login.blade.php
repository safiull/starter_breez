
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    {{-- All css file  --}}
    @include('layouts.partials.main_css')
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="POST" action="{{ route('login') }}">
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
                        <label>Email *</label>
                        <input type="text" class="form-control p_input" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                      <label>Password *</label>
                      <input type="password" name="password" class="form-control p_input" required autocomplete="current-password">
                    </div>

                    <!-- Remember Me -->
                    <div class="form-group d-flex align-items-center justify-content-between">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="remember"> {{ __('Remember me') }} </label>
                      </div>
                      <a href="#" class="forgot-pass">Forgot password</a>
                    </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Log in') }}</button>
                    </div>
                    <div class="d-flex">
                      <button class="btn btn-facebook mr-2 col">
                        <i class="mdi mdi-facebook"></i> Facebook </button>
                      <button class="btn btn-google col">
                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                    </div> 
                    <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
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
  </body>
</html>