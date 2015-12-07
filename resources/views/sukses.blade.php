@extends('page.master')

@section('content')
    <div class="ui two column stackable grid">
        @include('page.sidebar')
        <div class="thirteen wide column">
            <div class="ui tall stacked segment" style="margin-top: -1em;">
                <div class="ui middle aligned center aligned grid masthead transition visible" style="display: flex !important;">
                    <div class="column">
                        <h2 class="ui header">
                            <div class="content">
                                Selamat, pendaftaran berhasil
                            </div>
                            <h1>Nomor pendaftaran :</h1>
                            <h2 class="ui teal">{{ $nomor }}</h2>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document)
                .ready(function () {
                    $('.ui.form')
                            .form({
                                fields: {
                                    daftar_num: {
                                        identifier: 'daftar_num',
                                        rules: [
                                            {
                                                type: 'empty',
                                                prompt: 'Masukkan nomor pendaftaran'
                                            },
                                            {
                                                type: 'number',
                                                prompt: 'Pastikan anda memasukkan NOMOR'
                                            },
                                        ]
                                    }
                                }
                            });
                });
    </script>
@stop
