import datepicker from 'js-datepicker';

$('document').ready(function() {
    /*$('#datepicker').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
    });*/

    $('#book').on("click", function(){ $('#div-form').show(); $("#book").hide(); });
});