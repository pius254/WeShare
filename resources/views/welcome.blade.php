<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>WeShare</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <body>

        @include('partials.nav')
        @include('partials.loginmodal')

        <!-- Header :Start -->
        <div id="header" class="fullheight">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner text-center">
                            <h1 class="wow fadeInDown animated text-uppercase" data-wow-delay="1s">Welcome To WeShare. </h1>
                            <h2 class="wow fadeInUp animated text-uppercase" data-wow-delay=".6s">A New Way To Share Files And Interact</h2>
                            <a href="#footer">
                                <i class="fa fa-angle-double-down fa-2x wow fadeInUp animated" data-wow-delay="1.2s"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header :End -->

        <!-- About :Start -->
        <section id="about" class="fullheight">
            <div class="container">
                <div class="row">
                    <h1 class="text-uppercase text-center wow fadeInLeft animated" data-wow-delay="1s">about us</h1>
                </div>
            </div>
        </section>
        <!-- About :End -->

        <!-- Registration :Start -->
         <section id="registration" class="fullheight">
            <div class="container">
                <div class="row">
                @include('partials.notification')
                    <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="2s">create account</h1>
                    <div class="col-sm-6 col-md-6">
                        <h1 class="text-center"><strong>SIGN UP</strong></h1>
                        <form role="form" method="POST" action="{{ url('/doRegister') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}" />
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" />
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" name="email" class="form-control uname" placeholder="Email" value="{{old('email')}}" />
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <input type="text" name="username" class="form-control" placeholder="Username" value="{{old('username')}}" />
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="{{old('phone_number')}}" />
                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" name="password" class="form-control pword" placeholder="Password" />
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
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

                            <button class="btn btn-success btn-block">Sign UP</button>
                        </form>
                    </div>

                <div class="clear-fix"></div>

                <div class="col-sm-4 col-md-4 col-md-offset-2">
                    <h1 class="text-center">Login</h1>
                    <form role="form" method="POST" action="{{ url('/dashboard') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label"></label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label"></label>

                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
         </section>
         <!-- Registration :End -->

        <div class="clear-fix"></div>

         {{-- Login --}}
        <div class="container">
            <div class="row">
              
            </div>
        </div>
        {{-- End: Login --}}

        @include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/script.js') }}"></script>

    </body>
</html>
