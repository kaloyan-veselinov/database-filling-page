$(document).ready(function(){

  passwordField = document.getElementById("passwordField");
  form = document.getElementById("form");

  var keyDownEvents = new Array();
  var keyUpEvents = new Array();

  /*
  List of forbidden keys :
    - 8 : backspace
    - 46 : delete
    - 37, 38, 39, 40 : arrows
    - 91 : super
    - 112, ..., 123 : F1 to F12
    - 45 : inser
    - 36 : home
    - 35 : end
    - 33 : page up
    - 34 : page down
    - 42 : print screen
    - 145 : "arret defil"
    - 19 : pause
   */
  const forbiddenKeys = [8,46,37,38,39,40,91,112,113,114,115,
    116,117,118,119,120,121,122,123,45,35,36,33,34,42,145,19];

  passwordField.onkeydown = function(e){
    keyDownEvents.push(new Key(e));
  };

  passwordField.onkeyup = function(e) {
    // if the key is forbidden, reset the try. 
      if (forbiddenKeys.indexOf(e.keyCode.valueOf()) != -1) {
          reset();
      } else {
       keyUpEvents.push(new Key(e));
      }
  };

  function eventSubmit(e){
    e.preventDefault();
    alert("Submit");
  }

  form.addEventListener("submit", eventSubmit, false);

  function Key(e){
    this.key = e.key;
    console.log(e.keyCode);
    this.location = e.location;
    this.ctrlKey = e.ctrlKey;
    this.altKey = e.altKey;
    this.shiftKey = e.shiftKey;
    this.time = new Date().getTime();
  }

  // Resets the lists of events et empties passwordField
  function reset(){
    keyDownEvents = new Array();
    keyUpEvents = new Array();
    passwordField.value = '';
  }

});
