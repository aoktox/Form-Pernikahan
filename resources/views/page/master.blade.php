<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.css') }}">
    <script src="{{ asset('semantic/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{asset('semantic/dist/semantic.js')}}"></script>

    @yield('head')
</head>
<body>
    <h2 class="ui block header">
        <i class="university icon"></i>
        <div class="content">
            PENDAFTARAN PENCATATAN PERKAWINAN
            <div class="sub header">DINAS KEPENDUDUKAN DAN CATATAN SIPIL KOTA SURABAYA</div>
            <div class="sub header">Jl. Manyar Kertoarjo No. 6 Surabaya</div>
        </div>
    </h2>
    <div class="ui horizontal divider"></div>
@yield('content')
@yield('footer')
</body>
</html>