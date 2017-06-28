<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- NProgress -->
    <link  rel="stylesheet" href="{{ asset('css/nprogress.css') }}">
    <!-- jQuery custom content scroller -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
          {{-- sidebar --}}
            @include('partials.sidebar')
          {{-- /sidebar --}}

        {{-- Top Navigation --}}
          @include('partials.topnav')
        {{-- /Top Navigation --}}

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="container">
            {{-- <div class="page-title">
              <div class="title_left">
                <h3>Content <small> Goes <strong>Here</strong></small></h3>
              </div>
            </div> --}}
            <div class="row">
            @include('partials.notification')
              <div class="col-sm-12 col-md-6 col-md-offset-3">                
                <h1 class="text-center">Change Password</h1>
                <form role="form" method="POST" action=" {{ url('/update') }} ">
                  {{ method_field('PATCH') }}
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                    <input type="password" name="old_password" class="form-control pword" placeholder="Old Password" />
                        @if ($errors->has('old_password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('old_password') }}</strong>
                          </span>
                        @endif
                  </div>

                  <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                    <input type="password" name="new_password" class="form-control pword" placeholder="New Password" />
                        @if ($errors->has('new_password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('new_password') }}</strong>
                          </span>
                        @endif
                  </div>

                  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control pword" placeholder="Confirm Password" />
                      @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                      @endif
                  </div>

                  <button class="btn btn-success">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
          @include('partials.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="{{ asset('js/libs/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="{{ asset('js/libs/nprogress.js') }}"></script>
    <!-- jQuery custom content scroller -->
    <script type="text/javascript" src="{{ asset('js/libs/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script type="text/javascript" src="{{ asset('js/libs/custom.min.js') }}"></script>
  </body>
</html>