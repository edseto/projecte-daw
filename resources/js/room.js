//import select2 from 'select2';
//import { split } from 'lodash';

$('document').ready(function() {
    InitializeSelect2();
});

function InitializeSelect2()
{
    $('.select2').select2({
        placeholder: "Serveis de l'habitació",
        allowClear: true,
        theme: "classic"
    });
}