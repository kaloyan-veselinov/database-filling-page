$(document).ready(function() {
    var emailField = document.getElementById("email");
    var langFiled = document.getElementById("language");
    var form = document.getElementById("newsletter_form");


    function subscribe() {
        console.log(emailField.innerText + " | " + langFiled.innerHTML);
    }

    function eventSubmit(e) {
        e.preventDefault();
        subscribe();
    }

    form.addEventListener("submit", eventSubmit, false);

});