$(document).ready(function() {

    var lang = document.getElementById('lang');

    lang.addEventListener("change",changeLang);

});

function changeLang(value){
    $.post("/lang", {
        lang : value
    },function (){
        location.reload();
    });
}