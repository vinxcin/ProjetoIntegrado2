// função usando JQUERY para manipular o checkbox

$(document).ready(function(){
    $('#checkbox').on('click',function() {
       $("#checkVal").toggle(this.checked);
   });
});

