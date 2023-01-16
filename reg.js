document.getElementById("prijava").onclick = function(event) {
  var slanjeForme = true;

  // Ime korisnika mora biti uneseno
  var poljeIme = document.getElementById("ime");
  var ime = document.getElementById("ime").value;
  if (ime.length == 0) {
    slanjeForme = false;
    poljeIme.style.border="1px dashed red";
    document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
  }

  // Prezime korisnika mora biti uneseno
  var poljePrezime = document.getElementById("prezime");
  var prezime = document.getElementById("prezime").value;
  if (prezime.length == 0) {
    slanjeForme = false;
    poljePrezime.style.border="1px dashed red";
    document.getElementById("porukaPrezime").innerHTML="<br>Unesite prezime!<br>";
  }

  // Korisničko ime mora biti uneseno
  var poljeUsername = document.getElementById("username");
  var username = document.getElementById("username").value;
  if (username.length == 0) {
    slanjeForme = false;
    poljeUsername.style.border="1px dashed red";
    document.getElementById("porukaUsername").innerHTML="<br>Unesite username!<br>";
  }

  // Provjera podudaranja lozinki
  var poljePass = document.getElementById("lozinka");
  var pass = document.getElementById("lozinka").value;
  var poljePassRep = document.getElementById("lozinkaRep");
  var passRep = document.getElementById("lozinkaRep").value;
  if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
    slanjeForme = false;
    poljePass.style.border="1px dashed red";
    poljePassRep.style.border="1px dashed red";
    document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
    document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>";
  }

  if (slanjeForme != true) {
    event.preventDefault();
  }
};

function myFunction1() {
  var x = document.getElementById("lozinka");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("lozinkaRep");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
