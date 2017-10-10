function hello(){
  alert("Javascript is working");
}

function startImage()
{
    var myElement = document.getElementById("gameArea");
    myElement.style.backgroundImage = "url(images/start.jpg)";
    myElement.style.backgroundRepeat = "no-repeat";
    myElement.style.backgroundSize =  "100% 100%";
}

function hide(target) {
    document.getElementById(target).style.display = 'none';

}

function show(target) {
    document.getElementById(target).style.display = '';
    tableCreate();
}

function tableCreate(){


      var tbl  = document.createElement('table');
      tbl.setAttribute("id", "gameTable");
      tbl.style.width  = '100%';
      tbl.style.border = '1px solid black';

    for(var i = 0; i < 3; i++){
        var tr = tbl.insertRow();
        for(var j = 0; j < 3; j++){
          var td = tr.insertCell();
          td.appendChild(document.createTextNode('COLOR'));
          td.style.border = '3px solid black';
          td.style.backgroundColor = getRandomColor();

        }// end for
    }//end for
      var div = document.getElementById('gameArea2');
      div.appendChild(tbl);
}

function getRandomColor () {

  var myColors = ['blue', 'green', 'red', 'orange', 'purple', 'pink', 'gray'];
  var rand = myColors[Math.floor(Math.random() * myColors.length)];
  return rand;

}
