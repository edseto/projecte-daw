import './bootstrap';
import './booking';
import './room';

let delete_dialog = "Estàs segur/a de que ho vols borrar?";

$('document').ready(function() {
    $(".btn_delete").on('click', function(e){
        if(confirm(delete_dialog))
        {
            return true;
        } else {
            e.stopPropagation();
            e.preventDefault();
            return false;
        }
    });
});