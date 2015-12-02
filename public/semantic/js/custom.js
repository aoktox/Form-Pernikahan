/**
 * Created by aoktox on 25/11/15.
 */
function getKab()
{
    var propinsi = $("#propinsi").val();
    $.ajax({
        type:'POST',
        url:"wilayah/kabupaten",
        data:{ id : propinsi},
        success: function(html)
        {
            //$("#kabupaten_list").html(html);
            //foreach ()
            //console.log(propinsi);
            //console.log(html);
            $('#kabupaten_list').find('option').remove().end();
            $.each(html, function(idx, obj) {
                //console.log(obj.id + obj.nama);
                $('#kabupaten_list').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
            });
        }
    });
}
function getKec()
{
    var data = $("#kabupaten_list").val();
    $.ajax({
        type:'POST',
        url:"wilayah/kecamatan",
        data:{ id : data},
        success: function(html)
        {
            $('#kecamatan_list').find('option').remove().end();
            $.each(html, function(idx, obj) {
                $('#kecamatan_list').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
            });
        }
    });
}
function getDesa()
{
    var data = $("#kecamatan_list").val();
    $.ajax({
        type:'POST',
        url:"wilayah/desa",
        data:{ id : data},
        success: function(html)
        {
            $('#desa_list').find('option').remove().end();
            $.each(html, function(idx, obj) {
                $('#desa_list').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
            });
        }
    });
}
//alamat
$(document).ready(function() {
    $('#prov_ayah_suami').change(function () {
        $.ajax({
            type: 'POST',
            url: "wilayah/kabupaten",
            data: {id: $(this).val()},
            success: function (html) {
                $('#kab_ayah_suami').find('option').remove().end();
                $.each(html, function (idx, obj) {
                    $('#kab_ayah_suami').append("<option value='" + obj.id + "'>" + obj.nama + "</option>");
                });
            }
        });
    });
    $('#kab_ayah_suami').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/kecamatan",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kec_ayah_suami').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kec_ayah_suami').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#kec_ayah_suami').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/desa",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kel_ayah_suami').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kel_ayah_suami').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#prov_ibu_suami').change(function () {
        $.ajax({
            type: 'POST',
            url: "wilayah/kabupaten",
            data: {id: $(this).val()},
            success: function (html) {
                $('#kab_ibu_suami').find('option').remove().end();
                $.each(html, function (idx, obj) {
                    $('#kab_ibu_suami').append("<option value='" + obj.id + "'>" + obj.nama + "</option>");
                });
            }
        });
    });
    $('#kab_ibu_suami').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/kecamatan",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kec_ibu_suami').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kec_ibu_suami').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#kec_ibu_suami').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/desa",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kel_ibu_suami').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kel_ibu_suami').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    //istri
    $('#propinsi_istri').change(function () {
        $.ajax({
            type: 'POST',
            url: "wilayah/kabupaten",
            data: {id: $(this).val()},
            success: function (html) {
                $('#kabupaten_istri').find('option').remove().end();
                $.each(html, function (idx, obj) {
                    $('#kabupaten_istri').append("<option value='" + obj.id + "'>" + obj.nama + "</option>");
                });
            }
        });
    });
    $('#kabupaten_istri').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/kecamatan",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kecamatan_istri').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kecamatan_istri').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#kecamatan_istri').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/desa",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#desa_istri').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#desa_istri').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#prov_ayah_istri').change(function () {
        $.ajax({
            type: 'POST',
            url: "wilayah/kabupaten",
            data: {id: $(this).val()},
            success: function (html) {
                $('#kab_ayah_istri').find('option').remove().end();
                $.each(html, function (idx, obj) {
                    $('#kab_ayah_istri').append("<option value='" + obj.id + "'>" + obj.nama + "</option>");
                });
            }
        });
    });
    $('#kab_ayah_istri').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/kecamatan",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kec_ayah_istri').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kec_ayah_istri').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#kec_ayah_istri').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/desa",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kel_ayah_istri').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kel_ayah_istri').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#prov_ibu_istri').change(function () {
        $.ajax({
            type: 'POST',
            url: "wilayah/kabupaten",
            data: {id: $(this).val()},
            success: function (html) {
                $('#kab_ibu_istri').find('option').remove().end();
                $.each(html, function (idx, obj) {
                    $('#kab_ibu_istri').append("<option value='" + obj.id + "'>" + obj.nama + "</option>");
                });
            }
        });
    });
    $('#kab_ibu_istri').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/kecamatan",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kec_ibu_istri').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kec_ibu_istri').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#kec_ibu_istri').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/desa",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kel_ibu_istri').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kel_ibu_istri').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    //end istri
    //saksi
    $('#prov_saksi_1').change(function () {
        $.ajax({
            type: 'POST',
            url: "wilayah/kabupaten",
            data: {id: $(this).val()},
            success: function (html) {
                $('#kab_saksi_1').find('option').remove().end();
                $.each(html, function (idx, obj) {
                    $('#kab_saksi_1').append("<option value='" + obj.id + "'>" + obj.nama + "</option>");
                });
            }
        });
    });
    $('#kab_saksi_1').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/kecamatan",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kec_saksi_1').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kec_saksi_1').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#kec_saksi_1').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/desa",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kel_saksi_1').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kel_saksi_1').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#prov_saksi_2').change(function () {
        $.ajax({
            type: 'POST',
            url: "wilayah/kabupaten",
            data: {id: $(this).val()},
            success: function (html) {
                $('#kab_saksi_2').find('option').remove().end();
                $.each(html, function (idx, obj) {
                    $('#kab_saksi_2').append("<option value='" + obj.id + "'>" + obj.nama + "</option>");
                });
            }
        });
    });
    $('#kab_saksi_2').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/kecamatan",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kec_saksi_2').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kec_saksi_2').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    $('#kec_saksi_2').change(function () {
        $.ajax({
            type:'POST',
            url:"wilayah/desa",
            data:{ id : $(this).val()},
            success: function(html)
            {
                $('#kel_saksi_2').find('option').remove().end();
                $.each(html, function(idx, obj) {
                    $('#kel_saksi_2').append("<option value='"+obj.id+"'>"+obj.nama+"</option>");
                });
            }
        });
    });
    //end saksi
});
//end alamat
//footer
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

//CEK SUAMI
$(document).ready(function() {
    //Data Suami
    $('#cek_nik_suami').click(function (e) {
        e.preventDefault();
        $(this).addClass('loading');
        $.ajax({
            type: 'POST',
            url: "cekNik",
            data: {id: $('#nikSuami').val()},
            success: function (hasil) {
                //$('#cek_nik_suami').removeClass('loading');
                setTimeout(function(){
                 $('#cek_nik_suami').removeClass('loading');
                 },500);
                console.log('sukses');
                console.log(hasil);
                if (hasil.length == 0) {
                    //console.log('0');
                    $('#errorSuami').text("Data NIK tidak tersedia");
                    $('#namaSuami').val("").removeAttr("readonly");
                    $('#jobSuami').val("");
                    $('#KKSuami').val("");
                    $('.agama.suami').dropdown('clear');
                    $('.kwn.suami').dropdown('clear');
                    $('#passportSuami').val("");
                    $('.pendidikan.suami').dropdown('clear');
                    $('.status_kawin.suami').dropdown('clear').removeClass("disabled");
                    $('#tglLhrSuami').val("");
                    $('#tmpLhrSuami').val("");
                    $('.sembunyi.suami').slideDown("slow");
                }
                else {
                    $('#errorSuami').text("");
                    var date = new Date(hasil[0].tglLhr);
                    $('#namaSuami').val(hasil[0].nama).attr("readonly");
                    $('#jobSuami').val(hasil[0].job);
                    $('#KKSuami').val(hasil[0].kk);
                    $('.agama.suami').dropdown('set selected', hasil[0].agama);
                    $('.kwn.suami').dropdown('set selected', hasil[0].kwn);
                    $('#passportSuami').val(hasil[0].pasport);
                    $('.pendidikan.suami').dropdown('set selected', hasil[0].pendidikan);
                    $('.status_kawin.suami').dropdown('set selected', hasil[0].status_kawin).addClass("disabled");
                    $('#tglLhrSuami').val((date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear());
                    $('#tmpLhrSuami').val(hasil[0].tmpLhr);
                    /*if ($('.sembunyi').css('display') != 'none') {*/
                    $('.sembunyi.suami').slideUp("slow");
                    /*}*/
                }
            }
        });
    });

    //Data ayah
    $('#cek_nik_ayah_suami').click(function (e) {
        e.preventDefault();
        $(this).addClass('loading');
        $.ajax({
            type: 'POST',
            url: "cekNik",
            data: {id: $('#nikAyahSuami').val()},
            success: function (hasil) {
                setTimeout(function(){
                    $('#cek_nik_ayah_suami').removeClass('loading');
                },500);
                console.log('sukses Ayah');
                console.log(hasil);
                if (hasil.length == 0) {
                    //console.log('0');
                    //$('.sembunyi.Ayahsuami').slideDown("slow");
                    //$('#errorAyahSuami').text("Data NIK tidak tersedia");
                    $('#errorAyahSuami').text("Data NIK tidak tersedia");
                    $('#namaAyahSuami').val("").removeAttr("readonly");
                    $('#jobAyahSuami').val("");
                    $('#KKAyahSuami').val("");
                    $('.agama.Ayahsuami').dropdown('clear');
                    $('.kwn.Ayahsuami').dropdown('clear');
                    $('#passportAyahSuami').val("");
                    $('.pendidikan.Ayahsuami').dropdown('clear');
                    $('.status_kawin.Ayahsuami').dropdown('clear').removeClass("disabled");
                    $('#tglLhrAyahSuami').val("");
                    $('#tmpLhrAyahSuami').val("");
                    $('.sembunyi.Ayahsuami').slideDown("slow");
                }
                else {
                    var date = new Date(hasil[0].tglLhr);
                    $('#errorAyahSuami').text("");
                    $('#namaAyahSuami').val(hasil[0].nama).attr("readonly");
                    $('#jobAyahSuami').val(hasil[0].job);
                    $('.agama.Ayahsuami').dropdown('set selected', hasil[0].agama);
                    $('#tglLhrAyahSuami').val((date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear());
                    $('#tmpLhrAyahSuami').val(hasil[0].tmpLhr);
                    /*if ($('.sembunyi').css('display') != 'none') {*/
                    $('.sembunyi.Ayahsuami').slideUp("slow");
                    /*}*/
                }
            }
        });
    });

    //Data Ibu
    $('#cek_nik_ibu_suami').click(function (e) {
        e.preventDefault();
        $(this).addClass('loading');
        $.ajax({
            type: 'POST',
            url: "cekNik",
            data: {id: $('#nikIbuSuami').val()},
            success: function (hasil) {
                setTimeout(function(){
                    $('#cek_nik_ibu_suami').removeClass('loading');
                },500);
                console.log('sukses Ibu');
                console.log(hasil);
                if (hasil.length == 0) {
                    $('#errorIbuSuami').text("Data NIK tidak tersedia");
                    $('#namaIbuSuami').val("").removeAttr("readonly");
                    $('#jobIbuSuami').val("");
                    $('#KKIbuSuami').val("");
                    $('.agama.IbuSuami').dropdown('clear');
                    $('.kwn.IbuSuami').dropdown('clear');
                    $('#passportIbuSuami').val("");
                    $('.pendidikan.IbuSuami').dropdown('clear');
                    $('.status_kawin.IbuSuami').dropdown('clear').removeClass("disabled");
                    $('#tglLhrIbuSuami').val("");
                    $('#tmpLhrIbuSuami').val("");
                    $('.sembunyi.IbuSuami').slideDown("slow");
                }
                else {
                    var date = new Date(hasil[0].tglLhr);
                    $('#errorIbuSuami').text("");
                    $('#namaIbuSuami').val(hasil[0].nama).attr("readonly");
                    $('#jobIbuSuami').val(hasil[0].job);
                    $('.agama.IbuSuami').dropdown('set selected', hasil[0].agama);
                    $('#tglLhrIbuSuami').val((date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear());
                    $('#tmpLhrIbuSuami').val(hasil[0].tmpLhr);
                    /*if ($('.sembunyi').css('display') != 'none') {*/
                    $('.sembunyi.IbuSuami').slideUp("slow");
                    /*}*/
                }
            }
        });
    });
});
//END CEK SUAMI

//CEK ISTRI
$(document).ready(function() {
    //Data Suami
    $('#cek_nik_suami').click(function (e) {
        e.preventDefault();
        $(this).addClass('loading');
        $.ajax({
            type: 'POST',
            url: "cekNik",
            data: {id: $('#nikSuami').val()},
            success: function (hasil) {
                //$('#cek_nik_suami').removeClass('loading');
                setTimeout(function(){
                    $('#cek_nik_suami').removeClass('loading');
                },500);
                console.log('sukses');
                console.log(hasil);
                if (hasil.length == 0) {
                    //console.log('0');
                    $('#errorSuami').text("Data NIK tidak tersedia");
                    $('#namaSuami').val("").removeAttr("readonly");
                    $('#jobSuami').val("");
                    $('#KKSuami').val("");
                    $('.agama.suami').dropdown('clear');
                    $('.kwn.suami').dropdown('clear');
                    $('#passportSuami').val("");
                    $('.pendidikan.suami').dropdown('clear');
                    $('.status_kawin.suami').dropdown('clear').removeClass("disabled");
                    $('#tglLhrSuami').val("");
                    $('#tmpLhrSuami').val("");
                    $('.sembunyi.suami').slideDown("slow");
                }
                else {
                    $('#errorSuami').text("");
                    var date = new Date(hasil[0].tglLhr);
                    $('#namaSuami').val(hasil[0].nama).attr("readonly");
                    $('#jobSuami').val(hasil[0].job);
                    $('#KKSuami').val(hasil[0].kk);
                    $('.agama.suami').dropdown('set selected', hasil[0].agama);
                    $('.kwn.suami').dropdown('set selected', hasil[0].kwn);
                    $('#passportSuami').val(hasil[0].pasport);
                    $('.pendidikan.suami').dropdown('set selected', hasil[0].pendidikan);
                    $('.status_kawin.suami').dropdown('set selected', hasil[0].status_kawin).addClass("disabled");
                    $('#tglLhrSuami').val((date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear());
                    $('#tmpLhrSuami').val(hasil[0].tmpLhr);
                    /*if ($('.sembunyi').css('display') != 'none') {*/
                    $('.sembunyi.suami').slideUp("slow");
                    /*}*/
                }
            }
        });
    });

    //Data ayah
    $('#cek_nik_ayah_suami').click(function (e) {
        e.preventDefault();
        $(this).addClass('loading');
        $.ajax({
            type: 'POST',
            url: "cekNik",
            data: {id: $('#nikAyahSuami').val()},
            success: function (hasil) {
                setTimeout(function(){
                    $('#cek_nik_ayah_suami').removeClass('loading');
                },500);
                console.log('sukses Ayah');
                console.log(hasil);
                if (hasil.length == 0) {
                    //console.log('0');
                    //$('.sembunyi.Ayahsuami').slideDown("slow");
                    //$('#errorAyahSuami').text("Data NIK tidak tersedia");
                    $('#errorAyahSuami').text("Data NIK tidak tersedia");
                    $('#namaAyahSuami').val("").removeAttr("readonly");
                    $('#jobAyahSuami').val("");
                    $('#KKAyahSuami').val("");
                    $('.agama.Ayahsuami').dropdown('clear');
                    $('.kwn.Ayahsuami').dropdown('clear');
                    $('#passportAyahSuami').val("");
                    $('.pendidikan.Ayahsuami').dropdown('clear');
                    $('.status_kawin.Ayahsuami').dropdown('clear').removeClass("disabled");
                    $('#tglLhrAyahSuami').val("");
                    $('#tmpLhrAyahSuami').val("");
                    $('.sembunyi.Ayahsuami').slideDown("slow");
                }
                else {
                    var date = new Date(hasil[0].tglLhr);
                    $('#errorAyahSuami').text("");
                    $('#namaAyahSuami').val(hasil[0].nama).attr("readonly");
                    $('#jobAyahSuami').val(hasil[0].job);
                    $('.agama.Ayahsuami').dropdown('set selected', hasil[0].agama);
                    $('#tglLhrAyahSuami').val((date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear());
                    $('#tmpLhrAyahSuami').val(hasil[0].tmpLhr);
                    /*if ($('.sembunyi').css('display') != 'none') {*/
                    $('.sembunyi.Ayahsuami').slideUp("slow");
                    /*}*/
                }
            }
        });
    });

    //Data Ibu
    $('#cek_nik_ibu_suami').click(function (e) {
        e.preventDefault();
        $(this).addClass('loading');
        $.ajax({
            type: 'POST',
            url: "cekNik",
            data: {id: $('#nikIbuSuami').val()},
            success: function (hasil) {
                setTimeout(function(){
                    $('#cek_nik_ibu_suami').removeClass('loading');
                },500);
                console.log('sukses Ibu');
                console.log(hasil);
                if (hasil.length == 0) {
                    $('#errorIbuSuami').text("Data NIK tidak tersedia");
                    $('#namaIbuSuami').val("").removeAttr("readonly");
                    $('#jobIbuSuami').val("");
                    $('#KKIbuSuami').val("");
                    $('.agama.IbuSuami').dropdown('clear');
                    $('.kwn.IbuSuami').dropdown('clear');
                    $('#passportIbuSuami').val("");
                    $('.pendidikan.IbuSuami').dropdown('clear');
                    $('.status_kawin.IbuSuami').dropdown('clear').removeClass("disabled");
                    $('#tglLhrIbuSuami').val("");
                    $('#tmpLhrIbuSuami').val("");
                    $('.sembunyi.IbuSuami').slideDown("slow");
                }
                else {
                    var date = new Date(hasil[0].tglLhr);
                    $('#errorIbuSuami').text("");
                    $('#namaIbuSuami').val(hasil[0].nama).attr("readonly");
                    $('#jobIbuSuami').val(hasil[0].job);
                    $('.agama.IbuSuami').dropdown('set selected', hasil[0].agama);
                    $('#tglLhrIbuSuami').val((date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear());
                    $('#tmpLhrIbuSuami').val(hasil[0].tmpLhr);
                    /*if ($('.sembunyi').css('display') != 'none') {*/
                    $('.sembunyi.IbuSuami').slideUp("slow");
                    /*}*/
                }
            }
        });
    });
});
//END CEK ISTRI