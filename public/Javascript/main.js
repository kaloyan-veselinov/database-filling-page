$(document).ready(function() {

  var passwordField = document.getElementById("passwordField");
  var usernameField = document.getElementById("usernameField");
  var form = document.getElementById("form");
  var passwordToEnter = document.getElementById("displayedPassword");
  var passwordCounter = document.getElementById("passwordCounter");
  var nbPasswordEntriesLeft = 5;
  
  setPasswordToEnterLabel();
    $("#success_alert").hide();



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
    } else {
      enterKeyTriggered = true;
    }
  };

  passwordField.onkeyup = function(e) {
    if (e.keyCode != 13) { // escapes enter key
      // if the key is forbidden, reset the try.
      if (FORBIDDEN_KEYS.indexOf(e.keyCode.valueOf()) != -1) {
        reset();
      } else {
        keyUpEvents.push(Key(e));
      }
    }
  };

  // detects if submit is done by pressing the enter key in the username field
  usernameField.onkeydown = function(e) {
    if (e.keyCode == 13) {
      enterKeyTriggered = true;
    }
  }

  function setPasswordToEnterLabel() {
    $("#passwordCounter").text(nbPasswordEntriesLeft);
  }

  function eventSubmit(e) {
    e.preventDefault();
    // checks if username field is empty
    if ($("#usernameField").val() == ""){
        usernameField.style.backgroundColor = "#ff7e7e";
        reset();
    }
    // checks if the right password has been entered
    else if ($("#passwordField").val() == $("#displayedPassword").text()) {
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
        "date": date,
        "locale": locale,
        "browser": browser,
        "platform": platform,
        "submitMethod": submitMethod,
      });
        passwordField.style.backgroundColor = "#a8fda4";
        usernameField.style.removeProperty("background-color");

        if (nbPasswordEntriesLeft > 1) {
        reset();
        nbPasswordEntriesLeft--;
        setPasswordToEnterLabel();
      } else {
        submit();
        //window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ", "_self");
      }
    } else {
      passwordField.style.backgroundColor = "#ff7e7e";
      reset();
    }
  }

  function submit() {
    console.log(entries);
    $.post("index.php", {
        data: entries,
        action : "submit"
      },
      function(data, status) {
        reset();
        entries = new Array();
        $.get('password',function (result) {
            passwordToEnter.innerText = result;
        });
        nbPasswordEntriesLeft = 5;
        setPasswordToEnterLabel();
          $("#success_alert").show();
        setTimeout(function () {
            $("#success_alert").fadeOut();
        },3000)


      }
    );
  }

  form.addEventListener("submit", eventSubmit, false);

  function Key(e) {
    event = {
      "keyId": e.keyCode,
      "key": e.key,
      "location": e.location,
      "ctrlKey": +e.ctrlKey,
      "altKey": +e.altKey,
      "shiftKey": +e.shiftKey,
      "time": new Date().getTime(),
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

  function getSubmitMethod() {
    if (enterKeyTriggered) {
      return 'enter_key';
    } else {
      return 'click';
    }
  }
});
