/*window.jQuery = window.$ = require('jquery');
import select2 from 'select2';*/

$('document').ready(function() {
    InitializeSelect2();
});

function InitializeSelect2()
{
    let domObj = $('.select2');
    if(domObj.length > 0){
        domObj.select2({
            placeholder: "Serveis de l'habitació",
            allowClear: true,
            theme: "classic"
        });
    }
}