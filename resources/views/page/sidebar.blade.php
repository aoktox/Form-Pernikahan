<div class="ui three wide column large vertical menu">
    <div class="item">
        {{--<div class="ui icon input">
            <input type="text" placeholder="Search...">
            <i class="search icon"></i>
        </div>--}}
        <div class="ui icon input">
            <input type="text" placeholder="Search...">
            <i class="circular search link icon"></i>
        </div>
    </div>
    <a class="item" href="{{ url('/') }}">
        {{--<div class="ui teal label">1</div>--}}
        Home
    </a>
    <a class="item" href="{{url('daftar')}}">
        {{--<div class="ui label">51</div>--}}
        Pendaftaran Perkawinan
    </a>
    <a class="item">
        {{--<div class="ui label">1</div>--}}
        Edit Pendaftaran
    </a>
    <a class="item">
        {{--<div class="ui label">1</div>--}}
        Cetak Bukti Pendaftaran
    </a>
    <div class="item">
        <div class="ui statistic">
            <div class="value">
                40,509
            </div>
            <div class="label">
                Pendaftar
            </div>
        </div>
    </div>
</div>