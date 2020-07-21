<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Templet for travel agancy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon"       href="imgs/logometa.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;400;700;800;900&display=swap" >
        <link rel="stylesheet" href={{URL:: asset('fontawesome-free-5.12.0-web/css/all.css') }}>
        <link rel="stylesheet" href={{URL:: asset('css%20files/froala_blocks.css') }}>
        <link rel="stylesheet" href={{URL:: asset('css%20files/bootstrap.css') }}>
        <link rel="stylesheet" href={{URL:: asset('css%20files/style.css') }}>
        <title>progect two | Mohamed Abdel-Samie </title>
    </head>

    <body>

        @include('includes.navbar')

        <header>
            <div class="overlay"></div>

            <div class="intro-text">
                <h1 >Come <span>WedBee</span> BE PROFESSIONAL</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos accusantium dolores porro.</p>
            </div>
        </header>

        <main class="py-4">

            @include('includes.masseges')
            
            @yield('content')

        </main>


        <footer >
            <div class="container">
                <div class="row">

                    <div class="col-5">
                        <div class="social text-center ">
                            <a href="#"><img class=" img-fluid" src={{ asset('imgs/facebook.png') }}  alt="facebook"></a>
                            <a href="#"><img class=" img-fluid" src={{ asset('imgs/github-image.png')}} alt="gitHub"  ></a>
                            <a href="#"><img class=" img-fluid" src={{ asset('imgs/linkedin.png') }}     alt="linkedin"></a>
                            <a href="#"><img class=" img-fluid" src={{ asset('imgs/whatsapp.png') }}     alt="whatsUP" ></a>
                        </div>
                    </div>

                    <div class="col-2 border-right border-left logo text-center">
                        <a href="#"><img class=" img-fluid" src="imgs/logoPage.png" alt=""></a>
                    </div>

                    <div class="col-5 link  d-flex align-items-center justify-content-center ">
                        <a class="text-white btn h5 " href="">www.wedbee.com</a>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12 pt-4 ">
                        <h5 class="text-white">copy Rights Reseved <i class="fa fa-heart text-danger"></i> <span class=" main-color font-weight-bold">Mohamed Abdel-Samie</span></h5>
                    </div>
                </div>

            </div>
        </footer>

        <!-- End Landing page -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src={{ asset('js/main.js') }}></script>
    </body>
</html>
