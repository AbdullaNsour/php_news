// Checking the form before sending
document.getElementById("slanje").onclick = function(event) {
  var slanjeForme = true;

  // Title news (5-30 characters)
  var poljeTitle = document.getElementById("title");
  var title = document.getElementById("title").value;
  if (title.length < 5 || title.length > 55) {
    slanjeForme = false;
    poljeTitle.style.border="2px solid red";
    document.getElementById("porukaTitle").style.color = "red";
    document.getElementById("porukaTitle").style.padding = "0 5px";
    document.getElementById("porukaTitle").innerHTML="The news title must have between 5 and 55 characters!<br>";
  }

  // Short content (10-100 characters)
  var poljeAbout = document.getElementById("details");
  var about = document.getElementById("details").value;
  if (about.length < 10 || about.length > 100) {
    slanjeForme = false;
    poljeAbout.style.border="2px solid red";
    document.getElementById("porukaAbout").style.color = "red";
    document.getElementById("porukaAbout").innerHTML="Short content must be between 10 and 100 characters!<br>";
  }

  // Scontent must be entered
  var poljeContent = document.getElementById("text");
  var content = document.getElementById("text").value;
  if (content.length == 0) {
    slanjeForme = false;
    poljeContent.style.border="2px solid red";
    document.getElementById("porukaContent").style.color = "red";
    document.getElementById("porukaContent").innerHTML="Scontent must be entered!<br>";
  }

  // Image must be entered
  var fieldImage = document.getElementById("image");
  var pphoto = document.getElementById("image").value;
  if (pphoto.length == 0) {
    slanjeForme = false;
    fieldImage.style.border="2px dashed red";
    fieldImage.style.padding="13px 0 0 10px";
    document.getElementById("messageImage").style.color = "red";
    document.getElementById("messageImage").style.padding = "0 5px";
    document.getElementById("messageImage").innerHTML="Image must be entered!<br>";
  }

  // Category must be selected
  var poljeCategory = document.getElementById("category");
  if(document.getElementById("category").selectedIndex == 0) {
    slanjeForme = false;
    poljeCategory.style.border="2px dashed red";
    document.getElementById("messageCategory").style.color = "red";
    document.getElementById("messageCategory").style.padding = "0 5px";
    document.getElementById("messageCategory").innerHTML="Category must be selected !<br>";
  }

  if (slanjeForme != true) {
    event.preventDefault();
  }
};
