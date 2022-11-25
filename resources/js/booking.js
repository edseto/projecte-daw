import datepicker from 'js-datepicker';
import { split } from 'lodash';

const initial_datepicker = null;
const final_datepicker = null;
let occupated_dates = [];


$('document').ready(function() {
    GetUnavailableDates();

    InitializeInitialDate();
    InitializeFinalDate();

    //Other events
    $('#book').on("click", function(){ $('#div-form').show(); $("#book").hide(); });
});


function GetUnavailableDates()
{
    let url = '/booking/getDates/';
    let id = parseInt($("#room_id").val());

    /*$.ajax({
        method: 'post',
        url: url + id,
        success: function(data){ console.log(data); }
    });*/

    //TODO: Fer crida ajax per consultar les dates ocupades de l'habitació actual, i posar-les en format data a la variable global
    occupated_dates = [
        new Date(2022, (11 - 1), 28),
        new Date(2022, (11 - 1), 29),
        new Date(2022, (11 - 1), 30),
    ];
}

function GetMinumumDate()
{
    let result = $('#initial_date').val();
    let ret = new Date(2022, 11 - 1, 1);

    if(result != '')
    {
        let year = parseInt(split(result, '/')[2]);
        let month = parseInt(split(result, '/')[1]);
        let day = parseInt(split(result, '/')[0]);
        ret = new Date(year, month - 1, day);
    }

    return ret;
}

function InitializeInitialDate()
{
    $('#initial_date').keypress(function(e) {
        e.preventDefault();
        return false;
    });

    //Initial datepicker definition
    initial_datepicker = datepicker('#initial_date', {
        onSelect: (instance, date) => {
            $('#final_date_label').show();
            $('#final_date').show();

            if($('#initial_date').val() != '' && $('#final_date').val() != '')
            {
                $('#btn_book').removeAttr('disabled');
            } else {
                $('#btn_book').prop('disabled', true);
            }
        },
        formatter: (input, date, instance) => {
            const value = date.toLocaleDateString()
            input.value = value // => '1/1/2099'
        },
        showAllDates: true,
        disabledDates: occupated_dates,
        events: occupated_dates,
        minDate: new Date()
    });
}

function InitializeFinalDate()
{
    $('#final_date').keypress(function(e) {
        e.preventDefault();
        return false;
    });

    //Final datepicker definition
    final_datepicker = datepicker('#final_date', {
        onSelect: (instance, date) => {
            if($('#initial_date').val() != '' && $('#final_date').val() != '')
            {
                $('#btn_book').removeAttr('disabled');
            } else {
                $('#btn_book').prop('disabled', true);
            }
        },
        formatter: (input, date, instance) => {
            const value = date.toLocaleDateString()
            input.value = value // => '1/1/2099'
        },
        showAllDates: true,
        disabledDates: occupated_dates,
        events: occupated_dates,
        minDate: GetMinumumDate()
    });
}