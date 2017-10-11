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
    document.getElementById('panel').style.display = '';
    timer();
    tableCreate();
}

function tableCreate(){

      var count = 0;

      var tbl  = document.createElement('table');
      tbl.setAttribute("id", "gameTable");
      tbl.style.width  = '100%';
      tbl.style.border = '1px solid black';
      tbl.onclick = function() {
        var flag;
        count +=1;
        if(count == 36){

          var gametime = document.getElementById("count-up").innerText;
          document.getElementById("panel").innerText = 'GAME OVER';


          flag = document.getElementById("panel").innerText;



          if(flag === 'GAME OVER'){

            setTimeout(
            function () {
              alert('GAME OVER! \n\nYour time was ' + gametime);
              location.reload();}, 1500);
          }

        }
      }





    for(var i = 0; i < 6; i++){
        var tr = tbl.insertRow();
        for(var j = 0; j < 6; j++){
          var td = tr.insertCell();
          var color = getRandomColor();
          td.appendChild(document.createTextNode(' '));
          td.style.border = '3px solid black';
          td.style.backgroundColor = color;
          td.onclick = blacken(td, color);

        }// end for
    }//end for
      var div = document.getElementById('gameArea2');
      div.appendChild(tbl);



}




function blacken(td,color){
  return function(){

    td.onclick = function() {
      count +=1;
      if(count >= 3){


        var gametime = document.getElementById("count-up").innerText;

        alert('GAME OVER! \n\nYour time was ' + gametime);

        document.getElementById("count-up").innerText = '0:00';
        location.reload();


      }
    }


    td.style.backgroundColor = 'black';
    document.getElementById("color-is").innerText = color;
    document.getElementById("color-is").style.color = color;
  }
}


function getRandomColor () {

  //var myColors = ['blue', 'green', 'red', 'orange', 'purple', 'pink', 'gray'];
  var myColors = ['blue', 'green', 'red', 'orange', 'purple', 'pink']; // PART 5
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
