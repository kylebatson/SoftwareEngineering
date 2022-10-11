<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="bg">
        <div class="fixed top-0 left-0 px6 py4 sm:block blue">
            <a href="{{ route('dashboard') }}" class="ml-4 text-lg">SPDSS</a>
        </div>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block blue">
            @auth
            <a href="{{ url('/dashboard') }}" class="ml-4 text-md underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="ml-4 text-md underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-md underline">Register</a>

            @endif

            <a href="{{ route('register') }}" class="ml-4 text-md underline">About Us</a>
            <a href="{{ route('register') }}" class="ml-4 text-md underline">Contact Us</a>

            @endauth
        </div>
        @endif


        <div class="body">
            <div class="row">
                <div class="hero">
                    <div>
                        <h1 class="title">Spdss</h1>
                    </div>
                    <div class="subtitle">Slogan for Spdss</div>
                    <div><button class="lm-btn">Learn More</button></div>
                </div>
            </div>
            <div class="row">
                <div class="panels">
                    <div class="panel-1 panel">Utility</div>
                    <div class="panel-2 panel">Commercial</div>
                    <div class="panel-3 panel">Residential</div>
                </div>
            </div>

            <div class="row">
                <div class="hiw">
                    <div class="hiw-cmpname">SPDSS</div>
                    <div class="hiw-title">How it works</div>
                    <div class="hiw-items">
                        <div class="item-x">
                            <div class="hiw-container">
                                <div class="hiw-img"> <img src="{{ URL::asset('/images/solar-image.jpg') }}" class="hiw-img" alt=""> </div>
                                <div class="hiw-header">Register For system</div>
                                <div class="hiw-txt">Register to the system for access to all things solar panel.</div>
                            </div>
                        </div>
                        <div class="item-x">
                            <div class="hiw-container">
                                <div class="hiw-img"> <img src="{{ URL::asset('/images/pexels-tom-fisk-9893729.jpg') }}" class="hiw-img" alt=""> </div>
                                <div class="hiw-header">Go to Dashboard</div>
                                <div class="hiw-txt">Go to the dashboard to see our Catalog, Calculator or to schedule
                                    a visit. </div>
                            </div>
                        </div>
                        <div class="item-x">
                            <div class="hiw-container">
                                <div class="hiw-img"> <img src="{{ URL::asset('/images/pexels-tom-fisk-9893729.jpg') }}" class="hiw-img" alt=""> </div>
                                <div class="hiw-header">Select Items from Catalog</div>
                                <div class="hiw-txt">Peruse our catalog to make the best decision for your home.</div>
                            </div>
                        </div>
                        <div class="item-x">
                            <div class="hiw-container">
                                <div class="hiw-img"> <img src="{{ URL::asset('/images/pexels-tom-fisk-9893729.jpg') }}" class="hiw-img" alt=""> </div>
                                <div class="hiw-header">Save your choices</div>
                                <div class="hiw-txt">No rush.. Save your choices for later review.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="panels">
                    <div class="panel-4 panel">Utility</div>
                    <div class="panel-5 panel">Commercial</div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>