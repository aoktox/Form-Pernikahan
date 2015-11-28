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