<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DATA PMK KOTA BANDUNG</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js"
        integrity="sha512-vFABRuf5oGUaztndx4KoAEUVQnOvAIFs59y4tO0DILGWhQiFnFHiR+ZJfxLDyJlXgeut9Z07Svuvm+1Jv89w5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<style>
        .lds-facebook {
        display: inline-block;
        position: absolute;
        top:50%;
        width: 80px;
        height: 80px;
        z-index:999999;
        }
        .lds-facebook div {
        display: inline-block;
        position: absolute;
        left: 8px;
        width: 16px;
        background: #28A745;
        animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
        }
        .lds-facebook div:nth-child(1) {
        left: 8px;
        animation-delay: -0.24s;
        }
        .lds-facebook div:nth-child(2) {
        left: 32px;
        animation-delay: -0.12s;
        }
        .lds-facebook div:nth-child(3) {
        left: 56px;
        animation-delay: 0;
        }
        @keyframes lds-facebook {
        0% {
            top: 8px;
            height: 64px;
        }
        50%, 100% {
            top: 24px;
            height: 32px;
        }
        }
        .overlay{
            z-index:99999;
            position:fixed;
            top:0;
            left:0;
            bottom:0;
            right:0;
            background-color:rgba(130,130,130,0.8);
            text-align:center;
        }
    </style>
<body>
<div class="loading overlay">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-light bg-outline-success ">
            <a class="navbar-brand" href="#">
                <img src="https://dkpp-kota.bandung.go.id/frontend-template/assets/image-resources/logo2.png"
                    width="80px" height="40px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PMK
                    </a>
                    <div class="dropdown-menu text-success" aria-labelledby="navbarDropdown">
                        <a class="nav-link text-success" href="/">Peta</a>
                        <a class="nav-link text-success" href="{{ route('tabel-pmk.index') }}">Tabel</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    KURBAN
                    </a>
                    <div class="dropdown-menu text-success" aria-labelledby="navbarDropdown">
                        <a class="nav-link text-success" href="{{ route('kurban.peta') }}">Peta</a>
                        <a class="nav-link text-success" href="{{ route('tabel-kurban.index') }}">Tabel</a>
                    </div>
                </li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <!-- <div class="row mt-4"> -->
            <div class="col-md-8 offset-md-2 my-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="w-75 d-flex justify-content-start align-items-center">
                        <img src="https://dkpp-kota.bandung.go.id/frontend-template/assets/image-resources/logo2.png"
                            width="80px" height="40px" alt="">
                        <p class="mt-2" id="footer">DKPP  Kota Bandung &copy; </p>
                    </div>
                    <div class="w-25 d-flex justify-content-end">
                        <img src="../images/diskominfo.png" width="120px" height="auto" alt="">
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    @yield('script')
    <script>
        function showLoading() {
            $(".loading").css("display", "block")
        }

        function hideLoading() {
            $(".loading").css("display", "none")
        }
        $(document).ready(function () {
            setTimeout(() => {
                hideLoading();
            }, 2000);
        });
        document.getElementById("footer").append(new Date().getFullYear());
    </script>
</body>

</html>
