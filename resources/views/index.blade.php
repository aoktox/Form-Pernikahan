@extends('page.master')

@section('content')
    <div class="ui two column stackable grid">
        @include('page.sidebar')
        <div class="thirteen wide column">
            <div class="ui tall stacked segment" style="margin-top: -1em;">
                <h2>Selamat Datang</h2>
                <hr>
                <p>Terima kasih telah membuka website kami. Berikut kami informasikan tata cara Pendaftaran Online Perkawinan :</p>
                <ul>
                    <li>Mengisi form Pendaftaran dengan benar</li>
                    <li>Mencetak Tanda Bukti Pendaftaran</li>
                    <li>Membawa Hasil Cetak Form Pendaftaran beserta kelengkapan persyaratan ke Dispenduk untuk diverifikasi Petugas.</li>
                </ul>
            </div>
            {{--<div class="ui card link">
                <div class="content">
                    <div class="header">Project Timeline</div>
                </div>
                <div class="content">
                    <h4 class="ui sub header">Activity</h4>
                    <div class="ui small feed">
                        <div class="event">
                            <div class="content">
                                <div class="summary">
                                    <a>Elliot Fu</a> added <a>Jenny Hess</a> to the project
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="content">
                                <div class="summary">
                                    <a>Stevie Feliciano</a> was added as an <a>Administrator</a>
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="content">
                                <div class="summary">
                                    <a>Helen Troy</a> added two pictures
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <button class="ui button">Join Project</button>
                </div>
            </div>--}}
            {{--<div class="ui cards link">
                <div class="card">
                    <div class="content">
                        <div class="header">Project Timeline</div>
                    </div>
                    <div class="content">
                        <div class="header">Elliot Fu</div>
                        <div class="meta">Friend</div>
                        <div class="description">
                            Elliot Fu is a film-maker from New York.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="header">Veronika Ossi</div>
                        <div class="meta">Friend</div>
                        <div class="description">
                            Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <div class="header">Jenny Hess</div>
                        <div class="meta">Friend</div>
                        <div class="description">
                            Jenny is a student studying Media Management at the New School
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
@stop