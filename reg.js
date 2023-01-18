document.getElementById("prijava").onclick = function(event) {
  var slanjeForme = true;

  // User name must be entered
  var poljeIme = document.getElementById("ime");
  var ime = document.getElementById("ime").value;
  if (ime.length == 0) {
    slanjeForme = false;
    poljeIme.style.border="1px dashed red";
    document.getElementById("porukaIme").innerHTML="<br>Enter a name!<br>";
  }

  // The user's last name must be entered
  var fieldSurname = document.getElementById("last_name");
  var last_name = document.getElementById("last_name").value;
  if (last_name.length == 0) {
    slanjeForme = false;
    fieldSurname.style.border="1px dashed red";
    document.getElementById("messageLast_name").innerHTML="<br>Enter your last name!<br>";
  }

  // Username must be entered
  var poljeUsername = document.getElementById("username");
  var username = document.getElementById("username").value;
  if (username.length == 0) {
    slanjeForme = false;
    poljeUsername.style.border="1px dashed red";
    document.getElementById("Username_message").innerHTML="<br>Enter username!<br>";
  }

  //Password match check
  var poljePass = document.getElementById("password");
  var pass = document.getElementById("password").value;
  var poljePassRep = document.getElementById("passwordRep");
  var passRep = document.getElementById("passwordRep").value;
  if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
    slanjeForme = false;
    poljePass.style.border="1px dashed red";
    poljePassRep.style.border="1px dashed red";
    document.getElementById("porukaPass").innerHTML="<br>The passwords are not the same!<br>";
    document.getElementById("porukaPassRep").innerHTML="<br>The passwords are not the same!<br>";
  }

  if (slanjeForme != true) {
    event.preventDefault();
  }
};

function myFunction1() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("passwordRep");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
