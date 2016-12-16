/**
 * Created by aoktox on 26/11/15.
 */
today = new Date();
$(document).ready(function() {
    $('.birthday').daterangepicker({
        singleDatePicker: true,
        "buttonClasses": "ui button",
        "applyClass": "primary",
        "showDropdowns": true,
        "minDate": new Date(today.getYear()-100, today.getMonth(), today.getDate()),
        "maxDate": new Date(today.getYear()-17, today.getMonth(), today.getDate()),
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