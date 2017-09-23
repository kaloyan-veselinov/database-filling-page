$(document).ready(function() {

  var passwordField = document.getElementById("passwordField");
  var usernameField = document.getElementById("usernameField");
  var form = document.getElementById("form");

  var nbPasswordEntriesLeft = 5;

  setPasswordToEnterLabel();

  var keyDownEvents = new Array();
  var keyUpEvents = new Array();
  var entries = new Array();

  var enterKeyTriggered = false;

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
  const FORBIDDEN_KEYS = [8, 46, 37, 38, 39, 40, 91, 112, 113, 114, 115,
    116, 117, 118, 119, 120, 121, 122, 123, 45, 35, 36, 33, 34, 42, 145, 19
  ];

  passwordField.onkeydown = function(e) {
    // escapes enter key
    if (e.keyCode != 13) {
        keyDownEvents.push(Key(e));
    }else{
      enterKeyTriggered = true;
    }
  };

  passwordField.onkeyup = function(e) {
    if (e.keyCode != 13) {  // escapes enter key
        // if the key is forbidden, reset the try.
        if (FORBIDDEN_KEYS.indexOf(e.keyCode.valueOf()) != -1) {
            reset();
        } else {
            keyUpEvents.push(Key(e));
        }
    }
  };

  // detects if submit is done by pressing the enter key in the username field
  usernameField.onkeydown = function (e) {
      if (e.keyCode == 13){
        enterKeyTriggered = true;
      }
  }

  function setPasswordToEnterLabel() {
    $("#welcomeMessage").text("Please enter this password " + nbPasswordEntriesLeft + " times:");
  }

  function eventSubmit(e) {
    e.preventDefault();
    var submitMethod = getSubmitMethod();
    var date = new Date().getTime();
    console.log(date);
    var locale = navigator.language;
    var browser = navigator.appName;
    var platform = navigator.platform;
    entries.push({
      "password": $("#passwordField").val(),
      "username": $("#usernameField").val(),
      "keyUpEvents": keyUpEvents,
      "keyDownEvents": keyDownEvents,
      "date" : date,
      "locale" : locale,
      "browser" : browser,
      "platform": platform,
      "submitMethod" : submitMethod,
    });
    if (nbPasswordEntriesLeft > 1) {
      reset();

      nbPasswordEntriesLeft--;
      setPasswordToEnterLabel();
    } else {
      submit();
    }
  }

  function submit() {
    console.log(entries);
    $.post("/src/php/dataReceiver.php",
      { data: entries },
      function(data, status) {
        alert(" Status: " + status);
      }
    );
  }

  form.addEventListener("submit", eventSubmit, false);

  function Key(e) {
    event = {
      "keyId" : e.keyCode,
      "key" : e.key,
      "location" : e.location,
      "ctrlKey" : + e.ctrlKey,
      "altKey" : + e.altKey,
      "shiftKey" : + e.shiftKey,
      "time" : new Date().getTime(),
    }
    return event;
  }

  // Resets the lists of events et empties passwordField
  function reset() {
    keyDownEvents = new Array();
    keyUpEvents = new Array();
    passwordField.value = '';
    enterKeyTriggered = false;
  }

  function getSubmitMethod(){
    if (enterKeyTriggered){
      return 'enter_key';
    }else{
      return 'click';
    }
  }
});
