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
    timer();
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
          var color = getRandomColor();
          td.appendChild(document.createTextNode(' '));
          td.style.border = '3px solid black';
          td.style.backgroundColor = color;
          //td.onclick = displayColor(color);
          td.onclick = blacken(td, color);

        }// end for
    }//end for
      var div = document.getElementById('gameArea2');
      div.appendChild(tbl);

}

// function displayColor(color){
//
//     return function(){
//
//         document.getElementById("color-is").innerText = color;
//         document.getElementById("color-is").style.color = color;
//
//     }
// }

function blacken(td,color){
  return function(){
    td.style.backgroundColor = 'black';
    document.getElementById("color-is").innerText = color;
    document.getElementById("color-is").style.color = color;
  }
}


function getRandomColor () {

  var myColors = ['blue', 'green', 'red', 'orange', 'purple', 'pink', 'gray'];
  var rand = myColors[Math.floor(Math.random() * myColors.length)];
  return rand;

}

function timer(){
document.getElementById('count-up').style.display = '';
  var min = 0;
    var second = 00;
    var zeroPlaceholder = 0;
    var counterId = setInterval(function(){
                      countUp();
                    }, 1000);

    function countUp () {
        second++;
        if(second == 59){
          second = 00;
          min = min + 1;
        }
        if(second == 10){
            zeroPlaceholder = '';
        }else
        if(second == 00){
            zeroPlaceholder = 0;
        }

      document.getElementById("count-up").innerText = min+':'+zeroPlaceholder+second;


    }

}
