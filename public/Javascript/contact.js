$(document).ready(function() {

    var form = document.getElementById("contact_form");
    var msgField = document.getElementById("msg_field");
    var charCounter = document.getElementById("char_counter");


    msgField.addEventListener("input",updateCharCounter);



    function updateCharCounter() {
        charCounter.innerHTML = 2000 - msgField.value.length;
    }

    function submit(e) {
        e.preventDefault();
        console.log("ok");
        var name = $("#contact_name").val();
        var email = $("#contact_email").val();
        var subject = $("#contact_subject").val();
        var msg = msgField.value;
        $.post("/contact", {
            name: name,
            email : email,
            subject : subject,
            msg : msg
        });
    }


    form.addEventListener("submit",submit,false);
});