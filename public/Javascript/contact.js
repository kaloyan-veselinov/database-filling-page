$(document).ready(function() {

    var form = document.getElementById("contact_form");
    var msgField = document.getElementById("msg_field");
    var charCounter = document.getElementById("char_counter");


    msgField.addEventListener("input",updateCharCounter);



    function updateCharCounter() {
        console.log("ok");
        charCounter.innerHTML = 2000 - msgField.value.length;
    }

    function submit(e) {
        console.log("ok");
        e.preventDefault();
    }


    form.addEventListener("submit",submit,false);
});