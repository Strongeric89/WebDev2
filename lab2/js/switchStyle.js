//The following changes the stylesheet

  alert("Welcome to Eric Strongs Website");


  function swapStyleSheet(sheet) {
      document.getElementById("pagestyle").setAttribute("href", sheet);
  }

  function initate() {
      var style1 = document.getElementById("stylesheet1");
      var style2 = document.getElementById("stylesheet2");

      style1.onclick = function() { swapStyleSheet("stylesheets/Creative.css")};
      style2.onclick = function() { swapStyleSheet("stylesheets/Professional.css")};
  }

  window.onload = initate;
