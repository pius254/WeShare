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
                    <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="1s">create an account</h1>
                    <div class="col-sm-6 col-md-6">
                        <h1><strong>REGISTER</strong></h1>
                    </div>
                    <div class="col-sm-4 col-md-4 col-md-offset-2">
                        <h1><strong>LOGIN</strong></h1>
                    </div>
                </div>
            </div>
             
         </section>
         <!-- Registration :End -->

        @include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/script.js') }}"></script>

    </body>
</html>
