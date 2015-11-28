/**
 * Created by aoktox on 26/11/15.
 */
today = new Date();
$(document).ready(function() {
    $('.birthday').daterangepicker({
        locale: {
            format: 'YYYY-MM-DD'
        },
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
        locale: {
            format: 'YYYY-MM-DD'
        },
        "singleDatePicker": true,
        "showDropdowns": true,
        "startDate": today,
    }, function(start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
    });
});