$(document).ready(function() {

    var form = document.getElementById("contact_form");
    var msgField = document.getElementById("msg_field");
    var charCounter = document.getElementById("char_counter");
    var formDiv = document.getElementById("form_div");
    var loarder = document.getElementById("loader");


    msgField.addEventListener("input",updateCharCounter);


    charCounter.innerHTML = 2000 - msgField.value.length;


    function updateCharCounter() {
        charCounter.innerHTML = 2000 - msgField.value.length;
    }

    function submit(e) {
        e.preventDefault();
        var name = $("#contact_name").val();
        var email = $("#contact_email").val();
        var subject = $("#contact_subject").val();
        var msg = msgField.value;
        $.post("/contact", {
            name: name,
            email : email,
            subject : subject,
            msg : msg
        },function (result){
            document.body.innerHTML = result;
        });
    }


    form.addEventListener("submit",submit,false);
    loarder.className += " hidden";
    formDiv.className -= " hidden";
});