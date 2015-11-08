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
            <div class="ui five steps">
                <div class="ui active step">
                    Data Suami
                </div>
                <div class="ui disabled step">
                    Data Istri
                </div>
                <div class="ui disabled step">
                    Data Saksi
                </div>
                <div class="ui disabled step">
                    Data Perkawinan
                </div>
                <div class="ui disabled step">
                    Dokumen Persyaratan
                </div>
            </div>
            <form action="{{url('/submit-daftar')}}" method="POST" id="Step1">
                <section id="dataSuami">
                    <div class="ui form">
                        <div class="ui segment">
                            <a class="ui ribbon label">Data Suami</a>
                            <hr>
                            <div class="fields">
                                <div class="field">
                                    <label>NIK</label>
                                    <div class="ui icon input">
                                        <div class="ui corner labeled input">
                                            <input type="text" placeholder="NIK...">
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <a class="ui button">
                                            Cek
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="eight wide field">
                                <label>Nama Lengkap</label>
                                <div class="ui corner labeled input">
                                    <input type="text" placeholder="Search...">
                                    <div class="ui corner label">
                                        <i class="asterisk icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Nomor KK</label>
                                    {{--<input placeholder="First Name" name="name" type="text">--}}
                                    <div class="ui corner labeled input">
                                        <input type="text" placeholder="Search...">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Nomor Pasport</label>
                                    <input placeholder="First Name" name="name" type="text">
                                </div>
                                {{--<div class="field">
                                    <label>Gender</label>
                                    <div class="ui left icon input">
                                        <input type="text" name="birthday" id="birthday" value="" placeholder="Tanggal lahir" />
                                        <i class="calendar icon"></i>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Tempat Lahir</label>
                                    <div class="ui corner labeled input">
                                        <input type="text" placeholder="Search...">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Tanggal Lahir</label>
                                    <div class="ui right labeled left icon input">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="birthday" id="birthday" value="" placeholder="Tanggal lahir" />
                                        <a class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="eight wide field">
                                <label>Alamat</label>
                                <input name="password" type="password">
                            </div>
                            <div class="three fields">
                                <div class="field">
                                    <label>Provinsi</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Provinsi</option>
                                        <option value="OH">Provinsi 1</option>
                                        <option value="OK">Provinsi 2</option>
                                        <option value="OR">Provinsi 3</option>
                                        <option value="PA">Provinsi 4</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Kabupaten</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kabupaten</option>
                                        <option value="OH">Kabupaten 1</option>
                                        <option value="OK">Kabupaten 2</option>
                                        <option value="OR">Kabupaten 3</option>
                                        <option value="PA">Kabupaten 4</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Kecamatan</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kecamatan</option>
                                        <option value="OH">Kecamatan 1</option>
                                        <option value="OK">Kecamatan 2</option>
                                        <option value="OR">Kecamatan 3</option>
                                        <option value="PA">Kecamatan 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="fields">
                                <div class="ten wide field">
                                    <label>Kelurahan</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="OH">Kelurahan 1</option>
                                        <option value="OK">Kelurahan 2</option>
                                        <option value="OR">Kelurahan 3</option>
                                        <option value="PA">Kelurahan 4</option>
                                    </select>
                                </div>
                                <div class="two wide field">
                                    <label>RT</label>
                                    <input type="text" placeholder="Middle Name">
                                </div>
                                <div class="two wide field">
                                    <label>RW</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="two wide field">
                                    <label>Kode POS</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="eight wide field">
                                <label>Telepon</label>
                                <input name="password" type="password">
                            </div>
                            <div class="two fields">
                                <div class="eight wide field">
                                    <label>Pendidikan Terakhir</label>
                                    <select class="ui fluid dropdown">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="OH">Kelurahan 1</option>
                                        <option value="OK">Kelurahan 2</option>
                                        <option value="OR">Kelurahan 3</option>
                                        <option value="PA">Kelurahan 4</option>
                                    </select>
                                </div>
                                <div class="eight wide field">
                                    <label>Pekerjaan</label>
                                    <input name="password" type="password">
                                </div>
                            </div>
                            <div class="three fields">
                                <div class="three wide field">
                                    <label>Anak Ke</label>
                                    <input name="password" type="password">
                                </div>
                                <div class="five wide field">
                                    <label>Agama</label>
                                    <select class="ui fluid dropdown">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="OH">Kelurahan 1</option>
                                        <option value="OK">Kelurahan 2</option>
                                        <option value="OR">Kelurahan 3</option>
                                        <option value="PA">Kelurahan 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="three fields">
                                <div class="five wide field">
                                    <label>Status Perkawinan</label>
                                    <select class="ui fluid dropdown">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="OH">Kelurahan 1</option>
                                        <option value="OK">Kelurahan 2</option>
                                        <option value="OR">Kelurahan 3</option>
                                        <option value="PA">Kelurahan 4</option>
                                    </select>
                                </div>
                                <div class="two wide field">
                                    <label>Perkawinan Ke</label>
                                    <input name="password" type="password">
                                </div>
                            </div>
                            <div class="three wide field">
                                <label>Kewarganegaraan</label>
                                <select class="ui fluid dropdown">
                                    <option value="">Pilih Kelurahan</option>
                                    <option value="OH">WNI</option>
                                    <option value="OK">WNA</option>
                                </select>
                            </div>
                        </div>
                        <div class="ui positive right labeled icon button" id="dataSuami_next">
                            Tahap berikutnya<i class="arrow right icon"></i>
                        </div>
                        {{--<div class="ui positive right labeled icon button right floated">
                            Yep, that's me
                            <i class="arrow right icon"></i>
                        </div>--}}
                        <!-- Below tag is the placeholder/container for the error messages -->
                        <div class="ui error message"></div>
                    </div>
                </section>
                <section id="dataAyahSuami" style="display: none">
                    <div class="ui form">
                        <div class="ui segment">
                            <a class="ui ribbon label">Data Ayah Dari Suami</a>
                            <hr>
                            <div class="fields">
                                <div class="field">
                                    <label>NIK</label>
                                    <div class="ui icon input">
                                        <div class="ui corner labeled input">
                                            <input type="text" placeholder="NIK...">
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <a class="ui button">
                                            Cek
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="eight wide field">
                                <label>Nama Lengkap</label>
                                <div class="ui corner labeled input">
                                    <input type="text" placeholder="Search...">
                                    <div class="ui corner label">
                                        <i class="asterisk icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="five wide field">
                                <label>Agama</label>
                                <select class="ui fluid dropdown">
                                    <option value="">Pilih Kelurahan</option>
                                    <option value="OH">Kelurahan 1</option>
                                    <option value="OK">Kelurahan 2</option>
                                    <option value="OR">Kelurahan 3</option>
                                    <option value="PA">Kelurahan 4</option>
                                </select>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Tempat Lahir</label>
                                    <div class="ui corner labeled input">
                                        <input type="text" placeholder="Search...">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Tanggal Lahir</label>
                                    <div class="ui right labeled left icon input">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="birthday" id="birthday" value="" placeholder="Tanggal lahir" />
                                        <a class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="eight wide field">
                                <label>Alamat</label>
                                <input name="password" type="password">
                            </div>
                            <div class="three fields">
                                <div class="field">
                                    <label>Provinsi</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Provinsi</option>
                                        <option value="OH">Provinsi 1</option>
                                        <option value="OK">Provinsi 2</option>
                                        <option value="OR">Provinsi 3</option>
                                        <option value="PA">Provinsi 4</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Kabupaten</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kabupaten</option>
                                        <option value="OH">Kabupaten 1</option>
                                        <option value="OK">Kabupaten 2</option>
                                        <option value="OR">Kabupaten 3</option>
                                        <option value="PA">Kabupaten 4</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Kecamatan</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kecamatan</option>
                                        <option value="OH">Kecamatan 1</option>
                                        <option value="OK">Kecamatan 2</option>
                                        <option value="OR">Kecamatan 3</option>
                                        <option value="PA">Kecamatan 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="fields">
                                <div class="ten wide field">
                                    <label>Kelurahan</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="OH">Kelurahan 1</option>
                                        <option value="OK">Kelurahan 2</option>
                                        <option value="OR">Kelurahan 3</option>
                                        <option value="PA">Kelurahan 4</option>
                                    </select>
                                </div>
                                <div class="two wide field">
                                    <label>RT</label>
                                    <input type="text" placeholder="Middle Name">
                                </div>
                                <div class="two wide field">
                                    <label>RW</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="two wide field">
                                    <label>Kode POS</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="eight wide field">
                                    <label>Telepon</label>
                                    <input name="password" type="password">
                                </div>
                                <div class="eight wide field">
                                    <label>Pekerjaan</label>
                                    <input name="password" type="password">
                                </div>

                            </div>
                        </div>
                        <div class="ui positive right labeled icon button" id="dataAyahSuami_next">
                            Tahap berikutnya<i class="arrow right icon"></i>
                        </div>
                        <!-- Below tag is the placeholder/container for the error messages -->
                        <div class="ui error message"></div>
                    </div>
                </section>
                <section id="dataIbuSuami" style="display: none">
                    <div class="ui form">
                        <div class="ui segment">
                            <a class="ui ribbon label">Data Ibu Dari Suami</a>
                            <hr>
                            <div class="fields">
                                <div class="field">
                                    <label>NIK</label>
                                    <div class="ui icon input">
                                        <div class="ui corner labeled input">
                                            <input type="text" placeholder="NIK...">
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <a class="ui button">
                                            Cek
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="eight wide field">
                                <label>Nama Lengkap</label>
                                <div class="ui corner labeled input">
                                    <input type="text" placeholder="Search...">
                                    <div class="ui corner label">
                                        <i class="asterisk icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="five wide field">
                                <label>Agama</label>
                                <select class="ui fluid dropdown">
                                    <option value="">Pilih Kelurahan</option>
                                    <option value="OH">Kelurahan 1</option>
                                    <option value="OK">Kelurahan 2</option>
                                    <option value="OR">Kelurahan 3</option>
                                    <option value="PA">Kelurahan 4</option>
                                </select>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Tempat Lahir</label>
                                    <div class="ui corner labeled input">
                                        <input type="text" placeholder="Search...">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Tanggal Lahir</label>
                                    <div class="ui right labeled left icon input">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="birthday" id="birthday" value="" placeholder="Tanggal lahir" />
                                        <a class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="eight wide field">
                                <label>Alamat</label>
                                <input name="password" type="password">
                            </div>
                            <div class="three fields">
                                <div class="field">
                                    <label>Provinsi</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Provinsi</option>
                                        <option value="OH">Provinsi 1</option>
                                        <option value="OK">Provinsi 2</option>
                                        <option value="OR">Provinsi 3</option>
                                        <option value="PA">Provinsi 4</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Kabupaten</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kabupaten</option>
                                        <option value="OH">Kabupaten 1</option>
                                        <option value="OK">Kabupaten 2</option>
                                        <option value="OR">Kabupaten 3</option>
                                        <option value="PA">Kabupaten 4</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Kecamatan</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kecamatan</option>
                                        <option value="OH">Kecamatan 1</option>
                                        <option value="OK">Kecamatan 2</option>
                                        <option value="OR">Kecamatan 3</option>
                                        <option value="PA">Kecamatan 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="fields">
                                <div class="ten wide field">
                                    <label>Kelurahan</label>
                                    <select class="ui fluid search dropdown">
                                        <option value="">Pilih Kelurahan</option>
                                        <option value="OH">Kelurahan 1</option>
                                        <option value="OK">Kelurahan 2</option>
                                        <option value="OR">Kelurahan 3</option>
                                        <option value="PA">Kelurahan 4</option>
                                    </select>
                                </div>
                                <div class="two wide field">
                                    <label>RT</label>
                                    <input type="text" placeholder="Middle Name">
                                </div>
                                <div class="two wide field">
                                    <label>RW</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="two wide field">
                                    <label>Kode POS</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="eight wide field">
                                    <label>Telepon</label>
                                    <input name="password" type="password">
                                </div>
                                <div class="eight wide field">
                                    <label>Pekerjaan</label>
                                    <input name="password" type="password">
                                </div>

                            </div>
                        </div>
                        <div class="ui positive right labeled icon button" id="dataIbuSuami_next">
                            Kirim<i class="check icon"></i>
                        </div>
                        {{--<div class="ui positive right labeled icon button right floated">
                            Yep, that's me
                            <i class="arrow right icon"></i>
                        </div>--}}
                        <!-- Below tag is the placeholder/container for the error messages -->
                        <div class="ui error message"></div>
                    </div>
                </section>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        today = new Date();
        $(document).ready(function() {
            $('#birthday').daterangepicker({
                singleDatePicker: true,
                "buttonClasses": "ui button",
                "applyClass": "primary",
                "showDropdowns": true,
                "maxDate": new Date(today.getYear()-17, today.getMonth(), today.getDay()),
                "cancelClass": "red"
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
    <script>
        $('select.dropdown').dropdown();
        $("#dataSuami_next").click(function(e){
            e.preventDefault();
            $("#dataSuami").slideToggle("slow");
            $("#dataAyahSuami").slideToggle("slow");
        });
        $("#dataAyahSuami_next").click(function(e){
            e.preventDefault();
            $("#dataAyahSuami").slideToggle("slow");
            $("#dataIbuSuami").slideToggle("slow");
        });
        $("#dataIbuSuami_next").click(function(e){
            e.preventDefault();
            $("#Step1").submit();
        });
    </script>
</body>
</html>

