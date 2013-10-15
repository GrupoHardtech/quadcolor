function us_message(message, type){
    
    type = typeof type !== 'undefined' ? type : 'alert';
    
    var html = "";
    
    html+="<div class='row'>";
    html+="<div class='span1'>";       
    html+="<img src='" + document.domain + "/images/alert/"+type+".png'>";
    html+="</div>";
    html+="<div class='span4'>";
    html+=message;
    html+="</div>";
    html+="</div>";
    
    return html;
     
}

$('body').on('click', '.lbl', function() {
    $(this).parent('label').children('input').trigger('click');
});

$(document).ready(function(){
    $( document ).on( 'focus', ':input', function(){
        $( this ).attr( 'autocomplete', 'off' );
    });
});

function toUpper(e, elemento) {
    tecla=(document.all) ? e.keyCode : e.which; 
    elemento.value = elemento.value.toUpperCase();
}