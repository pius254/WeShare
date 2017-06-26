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
                    <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="2s">create account</h1>
                    <div class="col-sm-12 col-md-6 col-md-offset-3">
                        <h1><strong>SIGN UP</strong></h1>
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
                                <input type="text" name="email" class="form-control uname" placeholder="Username/Email" value="{{old('email')}}" />
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
                            <button class="btn btn-success btn-block">Sign UP</button>
                        </form>
                    </div>

                    <div class="clear-fix"></div>
                </div>
            </div>
             
         </section>
         <!-- Registration :End -->

         <div class="clear-fix"></div>

        @include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/script.js') }}"></script>

    </body>
</html>
