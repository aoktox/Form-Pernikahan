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
                                Masukkan nomor pendaftaran
                            </div>
                        </h2>
                        <form class="ui large form" method="POST" action="" id="cek_num_form">
                            {{ csrf_field() }}
                            <div class="ui">
                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="lock icon"></i>
                                        <input type="text" name="daftar_num" placeholder="Nomor pendaftaran" required>
                                    </div>
                                </div>
                                <div class="ui error message"></div>
                                <div class="ui animated fade fluid large teal submit button" id="submit_Gan">
                                    <div class="visible content">Cek nomor</div>
                                    <div class="hidden content">
                                        <i class="right arrow icon"></i>Sekarang
                                    </div>
                                </div>
                                <script>
                                    $('#submit_Gan').click(function(e){
                                        e.preventDefault();
                                        $('#cek_num_form').submit();
                                    });
                                </script>
                            </div>
                        </form>
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
