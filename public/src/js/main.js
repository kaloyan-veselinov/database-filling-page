$(document).ready(function(){

  passwordField = document.getElementById("passwordField");
  form = document.getElementById("form");

  var keyDownEvents = new Array();
  var keyUpEvents = new Array();

  passwordField.onkeydown = function(e){
    keyDownEvents.push(new Key(e));
  };

  passwordField.onkeyup = function(e){
    keyUpEvents.push(new Key(e));
  };

  function eventSubmit(e){
    e.preventDefault();
    alert("Submit");
  }

  form.addEventListener("submit", eventSubmit, false);

  function Key(e){
    this.key = e.key;
    this.location = e.location;
    this.ctrlKey = e.ctrlKey;
    this.altKey = e.altKey;
    this.shiftKey = e.shiftKey;
    this.time = new Date().getTime();
  }

});
