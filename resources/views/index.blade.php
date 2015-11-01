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
        </div>
    </div>
@stop