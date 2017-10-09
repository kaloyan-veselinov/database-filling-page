$(document).ready(function() {

    var form = document.getElementById("contact_form");

    function submit(e) {
        console.log("ok");
        e.preventDefault();
    }

    form.addEventListener("submit",submit,false);
});