$(document).ready(function() {

    var form = document.getElementById('newsletter_form');

    function submit(e){
        e.preventDefault();
        var email = $("#email").val()
        var lang = $("#lang").val()
        $.post("/newsletter", {
            email: email,
            language : lang
        },function () {
            $("#newsletterModal").modal('hide');
        });
    }

    form.addEventListener("submit", submit, false);

});