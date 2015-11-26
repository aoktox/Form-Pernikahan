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
                    <p class="ui info message">
                        Current step: <strong>@{{ currentStep }}</strong>
                    </p>

                    <p class="ui message" ng-show="isFinished">
                        Finished!
                    </p>

                    <wizard fullwidth="true" on-finish="isFinished = true" current-step="currentStep">
                        <form action="{{url('/submit-daftar')}}" method="POST" id="Step1" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <wizard-pane title="Data Suami">
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
                                                            <input type="text" name="suami[nik]" placeholder="NIK...">
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
                                                    <input type="text" name="suami[nama]" placeholder="Nama Lengkap">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Nomor KK</label>

                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Nomor KK" name="suami[kk]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Nomor Pasport</label>
                                                    <input placeholder="Nomor Pasport" name="suami[pasport]" type="text">
                                                </div>

                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat" name="suami[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="suami[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="suami[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select onchange="getKab()" class="ui fluid search dropdown" name="suami[prov]" id="propinsi">
                                                        <option value="">Pilih Provinsi</option>
                                                        @foreach($provinsi as $p)
                                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select onchange="getKec()" class="ui fluid search dropdown" name="suami[kab]" id="kabupaten_list">
                                                        <option value="">Pilih Kabupaten</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="suami[kec]" id="kecamatan_list" onchange="getDesa()">
                                                        <option value="">Pilih Kecamatan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="fields">
                                                <div class="ten wide field">
                                                    <label>Kelurahan</label>
                                                    <select class="ui fluid search dropdown" name="suami[kel]" id="desa_list">
                                                        <option value="">Pilih Kelurahan</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="suami[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="suami[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="suami[kdPos]">
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Telepon</label>
                                                <input name="suami[telp]" type="text">
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Pendidikan Terakhir</label>
                                                    <select class="ui fluid dropdown" name="suami[pendidikan]">
                                                        <option value="">Pendidikan</option>
                                                        <option value="OH">SD (Sederajat)</option>
                                                        <option value="OK">SMP (sederajat)</option>
                                                        <option value="OR">SMA (Sederajat)</option>
                                                        <option value="PA">Diploma</option>
                                                    </select>
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="suami[job]" type="text">
                                                </div>
                                            </div>
                                            <div class="three fields">
                                                <div class="three wide field">
                                                    <label>Anak Ke</label>
                                                    <input name="suami[anakKe]" type="text">
                                                </div>
                                                <div class="five wide field">
                                                    <label>Agama</label>
                                                    <select class="ui fluid dropdown" name="suami[agama]">
                                                        <option value="">Agama</option>
                                                        <option value="OH">Islam</option>
                                                        <option value="OK">Lain</option>
                                                        <option value="OR">Lain</option>
                                                        <option value="PA">Lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="three fields">
                                                <div class="five wide field">
                                                    <label>Status Perkawinan</label>
                                                    <select class="ui fluid dropdown" name="suami[status]">
                                                        <option value="">Status</option>
                                                        <option value="OH">Belum Kawin</option>
                                                        <option value="OK">Kawin</option>
                                                        <option value="OR">Cerai Hidup</option>
                                                        <option value="PA">Cerai Mati</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>Perkawinan Ke</label>
                                                    <input name="suami[kawinKe]" type="text">
                                                </div>
                                            </div>
                                            <div class="three wide field">
                                                <label>Kewarganegaraan</label>
                                                <select class="ui fluid dropdown" name="suami[kwn]">
                                                    <option value="">Pilih Kelurahan</option>
                                                    <option value="OH">WNI</option>
                                                    <option value="OK">WNA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ui positive right labeled icon button" id="dataSuami_next">
                                            Tahap berikutnya<i class="arrow right icon"></i>
                                        </div>

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
                                                            <input type="text" placeholder="NIK" name="AyahSuami[nik]">
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
                                                    <input type="text" placeholder="Nama Lengkap" name="AyahSuami[nama]">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="five wide field">
                                                <label>Agama</label>
                                                <select class="ui fluid dropdown" name="AyahSuami[agama]">
                                                    <option value="">Agama</option>
                                                    <option value="OH">Agama</option>
                                                    <option value="OK">Agama</option>
                                                    <option value="OR">Agama</option>
                                                    <option value="PA">Agama</option>
                                                </select>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat Lahir" name="AyahSuami[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="AyahSuami[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="AyahSuami[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select class="ui fluid search dropdown" name="AyahSuami[prov]">
                                                        <option value="">Pilih Provinsi</option>
                                                        <option value="OH">Provinsi 1</option>
                                                        <option value="OK">Provinsi 2</option>
                                                        <option value="OR">Provinsi 3</option>
                                                        <option value="PA">Provinsi 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select class="ui fluid search dropdown" name="AyahSuami[kab]">
                                                        <option value="">Pilih Kabupaten</option>
                                                        <option value="OH">Kabupaten 1</option>
                                                        <option value="OK">Kabupaten 2</option>
                                                        <option value="OR">Kabupaten 3</option>
                                                        <option value="PA">Kabupaten 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="AyahSuami[kec]">
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
                                                    <select class="ui fluid search dropdown" name="AyahSuami[kel]">
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="OH">Kelurahan 1</option>
                                                        <option value="OK">Kelurahan 2</option>
                                                        <option value="OR">Kelurahan 3</option>
                                                        <option value="PA">Kelurahan 4</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="AyahSuami[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="AyahSuami[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="AyahSuami[kdPos]">
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Telepon</label>
                                                    <input name="AyahSuami[telp]" type="text">
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="AyahSuami[job]" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui positive labeled icon button" id="dataAyahSuami_back"><i class="arrow left icon"></i>Tahap sebelumnya</div>
                                        <div class="ui positive right labeled icon button" id="dataAyahSuami_next">Tahap berikutnya<i class="arrow right icon"></i></div>
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
                                                            <input type="text" placeholder="NIK" name="IbuSuami[nik]">
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
                                                    <input type="text" placeholder="Nama Lengkap" name="IbuSuami[nama]">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="five wide field">
                                                <label>Agama</label>
                                                <select class="ui fluid dropdown" name="IbuSuami[agama]">
                                                    <option value="">Agama</option>
                                                    <option value="OH">Agama</option>
                                                    <option value="OK">Agama</option>
                                                    <option value="OR">Agama</option>
                                                    <option value="PA">Agama</option>
                                                </select>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat Lahir" name="IbuSuami[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="IbuSuami[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="IbuSuami[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select class="ui fluid search dropdown" name="IbuSuami[prov]">
                                                        <option value="">Pilih Provinsi</option>
                                                        <option value="OH">Provinsi 1</option>
                                                        <option value="OK">Provinsi 2</option>
                                                        <option value="OR">Provinsi 3</option>
                                                        <option value="PA">Provinsi 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select class="ui fluid search dropdown" name="IbuSuami[kab]">
                                                        <option value="">Pilih Kabupaten</option>
                                                        <option value="OH">Kabupaten 1</option>
                                                        <option value="OK">Kabupaten 2</option>
                                                        <option value="OR">Kabupaten 3</option>
                                                        <option value="PA">Kabupaten 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="IbuSuami[kec]">
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
                                                    <select class="ui fluid search dropdown" name="IbuSuami[kel]">
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="OH">Kelurahan 1</option>
                                                        <option value="OK">Kelurahan 2</option>
                                                        <option value="OR">Kelurahan 3</option>
                                                        <option value="PA">Kelurahan 4</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="IbuSuami[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="IbuSuami[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="IbuSuami[kdPos]">
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Telepon</label>
                                                    <input name="IbuSuami[telp]" type="text">
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="IbuSuami[job]" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui positive labeled icon button" id="dataIbuSuami_back"><i class="arrow left icon"></i>Tahap sebelumnya</div>
                                        <div class="ui positive right labeled icon button" id="dataIbuSuami_next" wz-next>
                                            Kirim<i class="check icon"></i>
                                        </div>
                                        <div class="ui error message"></div>
                                    </div>
                                </section>
                            </wizard-pane>
                            <wizard-pane title="Data Istri">
                                <section id="dataIstri">
                                    <div class="ui form">
                                        <div class="ui segment">
                                            <a class="ui ribbon label">Data Istri</a>
                                            <hr>
                                            <div class="fields">
                                                <div class="field">
                                                    <label>NIK</label>
                                                    <div class="ui icon input">
                                                        <div class="ui corner labeled input">
                                                            <input type="text" name="istri[nik]" placeholder="NIK...">
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
                                                    <input type="text" name="istri[nama]" placeholder="Nama Lengkap">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Nomor KK</label>

                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Nomor KK" name="istri[kk]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Nomor Pasport</label>
                                                    <input placeholder="Nomor Pasport" name="istri[pasport]" type="text">
                                                </div>

                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat" name="istri[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="istri[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="istri[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select class="ui fluid search dropdown" name="istri[prov]">
                                                        <option value="">Pilih Provinsi</option>
                                                        <option value="OH">Provinsi 1</option>
                                                        <option value="OK">Provinsi 2</option>
                                                        <option value="OR">Provinsi 3</option>
                                                        <option value="PA">Provinsi 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select class="ui fluid search dropdown" name="istri[kab]">
                                                        <option value="">Pilih Kabupaten</option>
                                                        <option value="OH">Kabupaten 1</option>
                                                        <option value="OK">Kabupaten 2</option>
                                                        <option value="OR">Kabupaten 3</option>
                                                        <option value="PA">Kabupaten 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="istri[kec]">
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
                                                    <select class="ui fluid search dropdown" name="istri[kel]">
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="OH">Kelurahan 1</option>
                                                        <option value="OK">Kelurahan 2</option>
                                                        <option value="OR">Kelurahan 3</option>
                                                        <option value="PA">Kelurahan 4</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="istri[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="istri[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="istri[kdPos]">
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Telepon</label>
                                                <input name="istri[telp]" type="text">
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Pendidikan Terakhir</label>
                                                    <select class="ui fluid dropdown" name="istri[pendidikan]">
                                                        <option value="">Pendidikan</option>
                                                        <option value="OH">SD (Sederajat)</option>
                                                        <option value="OK">SMP (sederajat)</option>
                                                        <option value="OR">SMA (Sederajat)</option>
                                                        <option value="PA">Diploma</option>
                                                    </select>
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="istri[job]" type="text">
                                                </div>
                                            </div>
                                            <div class="three fields">
                                                <div class="three wide field">
                                                    <label>Anak Ke</label>
                                                    <input name="istri[anakKe]" type="text">
                                                </div>
                                                <div class="five wide field">
                                                    <label>Agama</label>
                                                    <select class="ui fluid dropdown" name="istri[agama]">
                                                        <option value="">Agama</option>
                                                        <option value="OH">Islam</option>
                                                        <option value="OK">Lain</option>
                                                        <option value="OR">Lain</option>
                                                        <option value="PA">Lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="three fields">
                                                <div class="five wide field">
                                                    <label>Status Perkawinan</label>
                                                    <select class="ui fluid dropdown" name="istri[status]">
                                                        <option value="">Status</option>
                                                        <option value="OH">Belum Kawin</option>
                                                        <option value="OK">Kawin</option>
                                                        <option value="OR">Cerai Hidup</option>
                                                        <option value="PA">Cerai Mati</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>Perkawinan Ke</label>
                                                    <input name="istri[kawinKe]" type="text">
                                                </div>
                                            </div>
                                            <div class="three wide field">
                                                <label>Kewarganegaraan</label>
                                                <select class="ui fluid dropdown" name="istri[kwn]">
                                                    <option value="">Pilih Kelurahan</option>
                                                    <option value="OH">WNI</option>
                                                    <option value="OK">WNA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ui positive right labeled icon button" id="dataIstri_next">
                                            Tahap berikutnya<i class="arrow right icon"></i>
                                        </div>

                                        <div class="ui error message"></div>
                                    </div>
                                </section>
                                <section id="dataAyahIstri" style="display: none">
                                    <div class="ui form">
                                        <div class="ui segment">
                                            <a class="ui ribbon label">Data Ayah Dari Istri</a>
                                            <hr>
                                            <div class="fields">
                                                <div class="field">
                                                    <label>NIK</label>
                                                    <div class="ui icon input">
                                                        <div class="ui corner labeled input">
                                                            <input type="text" placeholder="NIK" name="AyahIstri[nik]">
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
                                                    <input type="text" placeholder="Nama Lengkap" name="AyahIstri[nama]">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="five wide field">
                                                <label>Agama</label>
                                                <select class="ui fluid dropdown" name="AyahIstri[agama]">
                                                    <option value="">Agama</option>
                                                    <option value="OH">Agama</option>
                                                    <option value="OK">Agama</option>
                                                    <option value="OR">Agama</option>
                                                    <option value="PA">Agama</option>
                                                </select>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat Lahir" name="AyahIstri[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="AyahIstri[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="AyahIstri[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select class="ui fluid search dropdown" name="AyahIstri[prov]">
                                                        <option value="">Pilih Provinsi</option>
                                                        <option value="OH">Provinsi 1</option>
                                                        <option value="OK">Provinsi 2</option>
                                                        <option value="OR">Provinsi 3</option>
                                                        <option value="PA">Provinsi 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select class="ui fluid search dropdown" name="AyahIstri[kab]">
                                                        <option value="">Pilih Kabupaten</option>
                                                        <option value="OH">Kabupaten 1</option>
                                                        <option value="OK">Kabupaten 2</option>
                                                        <option value="OR">Kabupaten 3</option>
                                                        <option value="PA">Kabupaten 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="AyahIstri[kec]">
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
                                                    <select class="ui fluid search dropdown" name="AyahIstri[kel]">
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="OH">Kelurahan 1</option>
                                                        <option value="OK">Kelurahan 2</option>
                                                        <option value="OR">Kelurahan 3</option>
                                                        <option value="PA">Kelurahan 4</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="AyahIstri[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="AyahIstri[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="AyahIstri[kdPos]">
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Telepon</label>
                                                    <input name="AyahIstri[telp]" type="text">
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="AyahIstri[job]" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui positive labeled icon button" id="dataAyahIstri_back"><i class="arrow left icon"></i>Tahap sebelumnya</div>
                                        <div class="ui positive right labeled icon button" id="dataAyahIstri_next">Tahap berikutnya<i class="arrow right icon"></i></div>
                                        <!-- Below tag is the placeholder/container for the error messages -->
                                        <div class="ui error message"></div>
                                    </div>
                                </section>
                                <section id="dataIbuIstri" style="display: none">
                                    <div class="ui form">
                                        <div class="ui segment">
                                            <a class="ui ribbon label">Data Ibu Dari Istri</a>
                                            <hr>
                                            <div class="fields">
                                                <div class="field">
                                                    <label>NIK</label>
                                                    <div class="ui icon input">
                                                        <div class="ui corner labeled input">
                                                            <input type="text" placeholder="NIK" name="IbuIstri[nik]">
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
                                                    <input type="text" placeholder="Nama Lengkap" name="IbuIstri[nama]">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="five wide field">
                                                <label>Agama</label>
                                                <select class="ui fluid dropdown" name="IbuIstri[agama]">
                                                    <option value="">Agama</option>
                                                    <option value="OH">Agama</option>
                                                    <option value="OK">Agama</option>
                                                    <option value="OR">Agama</option>
                                                    <option value="PA">Agama</option>
                                                </select>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat Lahir" name="IbuIstri[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="IbuIstri[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="IbuIstri[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select class="ui fluid search dropdown" name="IbuIstri[prov]">
                                                        <option value="">Pilih Provinsi</option>
                                                        <option value="OH">Provinsi 1</option>
                                                        <option value="OK">Provinsi 2</option>
                                                        <option value="OR">Provinsi 3</option>
                                                        <option value="PA">Provinsi 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select class="ui fluid search dropdown" name="IbuIstri[kab]">
                                                        <option value="">Pilih Kabupaten</option>
                                                        <option value="OH">Kabupaten 1</option>
                                                        <option value="OK">Kabupaten 2</option>
                                                        <option value="OR">Kabupaten 3</option>
                                                        <option value="PA">Kabupaten 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="IbuIstri[kec]">
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
                                                    <select class="ui fluid search dropdown" name="IbuIstri[kel]">
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="OH">Kelurahan 1</option>
                                                        <option value="OK">Kelurahan 2</option>
                                                        <option value="OR">Kelurahan 3</option>
                                                        <option value="PA">Kelurahan 4</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="IbuIstri[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="IbuIstri[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="IbuIstri[kdPos]">
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Telepon</label>
                                                    <input name="IbuIstri[telp]" type="text">
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="IbuIstri[job]" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui positive labeled icon button" id="dataIbuIstri_back"><i class="arrow left icon"></i>Tahap sebelumnya</div>
                                        <div class="ui positive right labeled icon button" id="dataIbuIstri_next" wz-next>
                                            Kirim<i class="check icon"></i>
                                        </div>
                                        <div class="ui error message"></div>
                                    </div>
                                </section>
                            </wizard-pane>
                            <wizard-pane title="Data Saksi">
                                <section id="Data_Saksi_I">
                                    <div class="ui form">
                                        <div class="ui segment">
                                            <a class="ui ribbon label">Data Saksi I</a>
                                            <hr>
                                            <div class="fields">
                                                <div class="field">
                                                    <label>NIK</label>
                                                    <div class="ui icon input">
                                                        <div class="ui corner labeled input">
                                                            <input type="text" placeholder="NIK" name="SaksiI[nik]">
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
                                                    <input type="text" placeholder="Nama Lengkap" name="SaksiI[nama]">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="five wide field">
                                                <label>Agama</label>
                                                <select class="ui fluid dropdown" name="SaksiI[agama]">
                                                    <option value="">Agama</option>
                                                    <option value="OH">Agama</option>
                                                    <option value="OK">Agama</option>
                                                    <option value="OR">Agama</option>
                                                    <option value="PA">Agama</option>
                                                </select>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat Lahir" name="SaksiI[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="SaksiI[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="SaksiI[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select class="ui fluid search dropdown" name="SaksiI[prov]">
                                                        <option value="">Pilih Provinsi</option>
                                                        <option value="OH">Provinsi 1</option>
                                                        <option value="OK">Provinsi 2</option>
                                                        <option value="OR">Provinsi 3</option>
                                                        <option value="PA">Provinsi 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select class="ui fluid search dropdown" name="SaksiI[kab]">
                                                        <option value="">Pilih Kabupaten</option>
                                                        <option value="OH">Kabupaten 1</option>
                                                        <option value="OK">Kabupaten 2</option>
                                                        <option value="OR">Kabupaten 3</option>
                                                        <option value="PA">Kabupaten 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="SaksiI[kec]">
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
                                                    <select class="ui fluid search dropdown" name="SaksiI[kel]">
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="OH">Kelurahan 1</option>
                                                        <option value="OK">Kelurahan 2</option>
                                                        <option value="OR">Kelurahan 3</option>
                                                        <option value="PA">Kelurahan 4</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="SaksiI[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="SaksiI[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="SaksiI[kdPos]">
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Telepon</label>
                                                    <input name="SaksiI[telp]" type="text">
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="SaksiI[job]" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="Data_Saksi_II">
                                    <div class="ui form">
                                        <div class="ui segment">
                                            <a class="ui ribbon label">Data Saksi II</a>
                                            <hr>
                                            <div class="fields">
                                                <div class="field">
                                                    <label>NIK</label>
                                                    <div class="ui icon input">
                                                        <div class="ui corner labeled input">
                                                            <input type="text" placeholder="NIK" name="SaksiII[nik]">
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
                                                    <input type="text" placeholder="Nama Lengkap" name="SaksiII[nama]">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="five wide field">
                                                <label>Agama</label>
                                                <select class="ui fluid dropdown" name="SaksiII[agama]">
                                                    <option value="">Agama</option>
                                                    <option value="OH">Agama</option>
                                                    <option value="OK">Agama</option>
                                                    <option value="OR">Agama</option>
                                                    <option value="PA">Agama</option>
                                                </select>
                                            </div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Tempat Lahir</label>
                                                    <div class="ui corner labeled input">
                                                        <input type="text" placeholder="Tempat Lahir" name="SaksiII[tmpLhr]">
                                                        <div class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label>Tanggal Lahir</label>
                                                    <div class="ui right labeled left icon input">
                                                        <i class="calendar icon"></i>
                                                        <input type="text" name="SaksiII[tglLhr]" class="birthday" value="" placeholder="Tanggal lahir" />
                                                        <a class="ui corner label">
                                                            <i class="asterisk icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Alamat</label>
                                                <input name="SaksiII[alamat]" type="text">
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Provinsi</label>
                                                    <select class="ui fluid search dropdown" name="SaksiII[prov]">
                                                        <option value="">Pilih Provinsi</option>
                                                        <option value="OH">Provinsi 1</option>
                                                        <option value="OK">Provinsi 2</option>
                                                        <option value="OR">Provinsi 3</option>
                                                        <option value="PA">Provinsi 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kabupaten</label>
                                                    <select class="ui fluid search dropdown" name="SaksiII[kab]">
                                                        <option value="">Pilih Kabupaten</option>
                                                        <option value="OH">Kabupaten 1</option>
                                                        <option value="OK">Kabupaten 2</option>
                                                        <option value="OR">Kabupaten 3</option>
                                                        <option value="PA">Kabupaten 4</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Kecamatan</label>
                                                    <select class="ui fluid search dropdown" name="SaksiII[kec]">
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
                                                    <select class="ui fluid search dropdown" name="SaksiII[kel]">
                                                        <option value="">Pilih Kelurahan</option>
                                                        <option value="OH">Kelurahan 1</option>
                                                        <option value="OK">Kelurahan 2</option>
                                                        <option value="OR">Kelurahan 3</option>
                                                        <option value="PA">Kelurahan 4</option>
                                                    </select>
                                                </div>
                                                <div class="two wide field">
                                                    <label>RT</label>
                                                    <input type="text" placeholder="RT" name="SaksiII[rt]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>RW</label>
                                                    <input type="text" placeholder="RW" name="SaksiII[rw]">
                                                </div>
                                                <div class="two wide field">
                                                    <label>Kode POS</label>
                                                    <input type="text" placeholder="Kode POS" name="SaksiII[kdPos]">
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <div class="eight wide field">
                                                    <label>Telepon</label>
                                                    <input name="SaksiII[telp]" type="text">
                                                </div>
                                                <div class="eight wide field">
                                                    <label>Pekerjaan</label>
                                                    <input name="SaksiII[job]" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui positive right labeled icon button" wz-next>
                                            Kirim<i class="check icon"></i>
                                        </div>
                                    </div>
                                </section>
                            </wizard-pane>
                            <wizard-pane title="Data Perkawinan">
                                <section id="Data_Perkawinan">
                                    <div class="ui form">
                                        <div class="ui segment">
                                            <a class="ui ribbon label">Data Perkawinan</a>
                                            <hr>
                                            <div class="inline field">
                                                <label>Tanggal Pemberkatan Perkawinan</label>
                                                <div class="ui right labeled left icon input">
                                                    <i class="calendar icon"></i>
                                                    <input type="text" name="DataPerkawinan[tglPemberkatan]" class="tanggalPicker" placeholder="Tanggal Pemberkatan" />
                                                    <a class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="inline field">
                                                <label>Tanggal Pencatatan Perkawinan</label>
                                                <div class="ui right labeled left icon input">
                                                    <i class="calendar icon"></i>
                                                    <input type="text" name="DataPerkawinan[tglPencatatan]" class="tanggalPicker" placeholder="Tanggal Pencatatan" />
                                                    <a class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="inline field">
                                                <label>Pukul</label>
                                                <div class="ui right labeled left icon input">
                                                    <i class="alarm icon"></i>
                                                    <input type="text" name="DataPerkawinan[jam]" placeholder="Pukul" />
                                                    <a class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Nama Organisasi Penghayat Kepercayaan</label>
                                                <div class="ui input">
                                                    <input type="text" name="DataPerkawinan[org]">
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Tempat Pemberkatan</label>
                                                <div class="ui input">
                                                    <input type="text" placeholder="Tempat Pemberkatan" name="DataPerkawinan[tmpBerkat]">
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Tempat Pencatatan</label>
                                                <div class="ui input">
                                                    <input type="text" placeholder="Tempat Pencatatan" name="DataPerkawinan[tmpCatat]">
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Nama Badan Peradilan</label>
                                                <div class="ui input">
                                                    <input type="text" placeholder="Nama Badan Peradilan" name="DataPerkawinan[badanPeradilan]">
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Nomor Putusan Penetapan Pengadilan</label>
                                                <div class="ui input">
                                                    <input type="text" name="DataPerkawinan[noPutusan]">
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Tanggal Putusan Penetapan Pengadilan</label>
                                                <div class="ui right labeled left icon input">
                                                    <i class="calendar icon"></i>
                                                    <input type="text" name="DataPerkawinan[tglPutusan]" class="tanggalPicker" placeholder="Tanggal Penetapan" />
                                                    <a class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Nama Pemuka Agama / Pghyt Kepercayaan</label>
                                                <div class="ui input">
                                                    <input type="text" name="DataPerkawinan[PemukaAgama]" placeholder="Nama Pemuka Agama">
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Ijin Perwakilan bagi WNA / Nomor</label>
                                                <div class="ui input">
                                                    <input type="text" name="DataPerkawinan[IjinPerwakilan]">
                                                </div>
                                            </div>
                                            <div class="inline field field">
                                                <label>Jumlah Anak Yang Telah Diakui dan Disahkan</label>
                                                <div class="ui input">
                                                    <input type="text" placeholder="Jumlah Anak" name="DataPerkawinan[jlhAnak]">
                                                </div>
                                            </div>
                                            <div class="inline field">
                                                <div class="two fields">
                                                    <div class="field">
                                                        <label>Pelapor</label>
                                                        <select class="ui fluid dropdown" name="DataPerkawinan[Pelapor]">
                                                            <option value="">Pelapor</option>
                                                            <option value="Suami">Suami</option>
                                                            <option value="Istri">Istri</option>
                                                        </select>
                                                    </div>
                                                    <div class="field">
                                                        <label>Agama / Penghayat Kepercayaan</label>
                                                        <select class="ui fluid dropdown" name="DataPerkawinan[agama]">
                                                            <option value="">Agama</option>
                                                            <option value="OH">Agama</option>
                                                            <option value="OK">Agama</option>
                                                            <option value="OR">Agama</option>
                                                            <option value="PA">Agama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ui positive right labeled icon button" id="dataKawin_next" wz-next>Lanjtkan<i class="check icon"></i></div>
                                    </div>
                                </section>
                            </wizard-pane>
                            <wizard-pane title="Dokumen Persyaratan">
                                <section id="Dokumen_Persyaratan">
                                    <div class="ui form">
                                        <div class="ui right aligned grid two fields">
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    KTP Suami
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[ktpSuami]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    KTP Istri
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[ktpIstri]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Surat Keterangan Dari Desa/Kelurahan
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[sk]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Pas Foto Suami dan Istri Berdampingan (4x6 cm)
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[foto]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Kutipan Akta Kelahiran Suami
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[aktaSUami]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Kutipan Akta Kelahiran Istri
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[aktaIstri]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Akta Perceraian/Kematian dengan Suami/Istri terdahulu
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[aktaCerai]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Surat Izin Kawin dari komandan (bagi anggota ABRI)
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[skABRI]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Surat Perjanjian Kawin (bila ada)
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[janji]">
                                                </div>
                                            </div>
                                            <div class="right floated right aligned seven wide column">
                                                <div class="ui segment">
                                                    Surat Keterangan dari Gereja/Vihara/Pura/Penghayat Kepercayaan
                                                </div>
                                            </div>
                                            <div class="left floated left aligned five wide column">
                                                <div class="ui input">
                                                    <input type="file" placeholder="Search..." name="doc[skAgama]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="ui positive right labeled icon button" id="simpanAll" >Simpan<i class="check icon"></i></div>
                                </section>
                            </wizard-pane>
                            <script type="text/javascript">
                                today = new Date();
                                $(document).ready(function() {
                                    $('.birthday').daterangepicker({
                                        singleDatePicker: true,
                                        "buttonClasses": "ui button",
                                        "applyClass": "primary",
                                        "showDropdowns": true,
                                        "maxDate": new Date(today.getYear()-17, today.getMonth(), today.getDay()),
                                        "cancelClass": "red"
                                    }, function(start, end, label) {
                                        console.log(start.toISOString(), end.toISOString(), label);
                                    });
                                    $('.tanggalPicker').daterangepicker({
                                        "singleDatePicker": true,
                                        "showDropdowns": true,
                                        "startDate": today,
                                    }, function(start, end, label) {
                                        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
                                    });
                                });
                            </script>
                        </form>
                    </wizard>
                </div>
            </div>
    <script>
        $(document).ready(function() {
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
            $("#dataAyahSuami_back").click(function(e){
                e.preventDefault();
                $("#dataSuami").slideToggle("slow");
                $("#dataAyahSuami").slideToggle("slow");
            });
            $("#dataIbuSuami_back").click(function(e){
                e.preventDefault();
                $("#dataAyahSuami").slideToggle("slow");
                $("#dataIbuSuami").slideToggle("slow");
            });
            $("#dataIstri_next").click(function(e){
                e.preventDefault();
                $("#dataIstri").slideToggle("slow");
                $("#dataAyahIstri").slideToggle("slow");
            });
            $("#dataAyahIstri_next").click(function(e){
                e.preventDefault();
                $("#dataAyahIstri").slideToggle("slow");
                $("#dataIbuIstri").slideToggle("slow");
            });
            $("#dataAyahIstri_back").click(function(e){
                e.preventDefault();
                $("#dataIstri").slideToggle("slow");
                $("#dataAyahIstri").slideToggle("slow");
            });
            $("#dataIbuIstri_back").click(function(e){
                e.preventDefault();
                $("#dataAyahIstri").slideToggle("slow");
                $("#dataIbuIstri").slideToggle("slow");
            });
            $("#simpanAll").click(function(e){
                e.preventDefault();
                $("#Step1").submit();
            });
        });
    </script>
    </div>
</body>
</html>