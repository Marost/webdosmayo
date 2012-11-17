// ***** YOUR EXTRA FUNCTIONS FOR EXTRA COLUMNS OR SOMETHING ELSE *****

function ctActions(table_id){

    alert('Action: '+$('#'+table_id+'_actions').val()+' - '+$('#'+table_id+'_actions :selected').text()+'\n\nSelect some checkboxes');

    $('#'+table_id+'_actions option:eq(0)').attr("selected","selected") ;

    $("#ct input[type='checkbox']:checked").each(function() {
        alert('Checkbox selected : '+this.value);
    })

}

function checkAll(){
    if($('#ct_check_all').is(':checked'))
        $("#ct input[type='checkbox']").attr('checked', true);
    else
        $("#ct input[type='checkbox']").attr('checked', false);
}

function check(){
    return true;
}

function funcEdit(value){
    alert(value);
}

function funcDelete(value){
    alert(value);
}