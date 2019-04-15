
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EMC | Infodata</title>

    <link href="{{ asset('inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('inspinia/css/animate.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('inspinia/css/style.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('inspinia/css/login.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-12">
              <h1 style="visibility: hidden">a</h1>
              <h1 style="visibility: hidden">a</h1>
              <h1 style="visibility: hidden">a</h1>
            </div>
            <div class="col-md-3">
            </div>

            <div class="col-md-6">
                <div class="ibox-content">

                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                      <label for="email" class="col-sm-12 col-form-label text-md-right">{{ __('Nama') }}</label>
                      <div class="form-group">
                          <input type="text" class="form-control" name="email" placeholder="E-Mail / Username" value="{{ old('email') }}" required autofocus>
                          <!-- <input type="email" class="form-control" placeholder="Username" required=""> -->
                          <!-- <input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> -->

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                      <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>
                      <div class="form-group">
                          <!-- <input type="password" class="form-control" placeholder="Password" required=""> -->
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                      <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>

                      <!-- <a href="#"><small>Forgot password?</small></a>
                      <p class="text-muted text-center"><small>Do not have an account?</small></p>
                      <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
                  </form>
                    <!-- <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p> -->
                </div>
            </div>
        </div>
        <hr/>

    </div>

</body>

</html>
