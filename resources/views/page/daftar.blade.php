<!DOCTYPE html>
<html ng-app="dropdownApp">
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

    <link rel="stylesheet" type="text/css" media="all" href="{{asset('semantic/css/daterangepicker.css')}}" />
    {{--<link type="text/css" rel="stylesheet" href="{{asset('semantic/css/jquery.steps.min.css')}}"/>--}}
    {{--<script type="text/javascript" src="{{asset('semantic/js/jquery.steps.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('semantic/js/moment.js')}}"></script>
    <script type="text/javascript" src="{{asset('semantic/js/daterangepicker.js')}}"></script>

    <script src="{{asset('angular/angular.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('semantic/js/wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('semantic/js/controllers.js')}}" type="text/javascript"></script>
    <script src="{{asset('semantic/js/custom.js')}}" type="text/javascript"></script>
</head>
<body ng-controller="RootCtrl">
    <h2 class="ui block header">
        <i class="university icon"></i>
        <div class="content">
            PENDAFTARAN PENCATATAN PERKAWINAN
            <div class="sub header">DINAS KEPENDUDUKAN DAN CATATAN SIPIL KOTA SURABAYA</div>
            <div class="sub header">Jl. Manyar Kertoarjo No. 6 Surabaya</div>
        </div>
    </h2>
    <div class="ui horizontal divider"></div>
        <div class="ui two column stackable grid">
        @include('page.sidebar')
            <div class="twelve wide column">
                <div class="ui tall stacked segment" style="margin-top: -1em;">
                    {{--<p class="ui info message">
                        Current step: <strong>@{{ currentStep }}</strong>
                    </p>--}}
                    <p class="ui message" ng-show="isFinished">
                        Finished!
                    </p>

                    <wizard fullwidth="true" on-finish="isFinished = true" current-step="currentStep">
                        <form action="{{url('/daftar')}}" method="POST" id="Step1" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @include('page.lib.dataSuami')
                            @include('page.lib.dataIstri')
                            @include('page.lib.dataSaksi')
                            @include('page.lib.dataPerkawinan')
                            @include('page.lib.dokumenOpt')
                            <script src="{{ asset('semantic/js/tanggal.js') }}"></script>
                        </form>
                    </wizard>
                </div>
            </div>
    </div>
</body>
</html>