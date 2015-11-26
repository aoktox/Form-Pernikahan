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