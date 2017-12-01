function getData(){

  var request = new XMLHttpRequest();
  url = "data.txt";

  request.onreadystatechange = function (){
    if(request.readyState == 4 && request.status == 200){
      var data = JSON.parse(request.responseText);
      //console.log(data);
      loadData(data);
    }

  }
  request.open("GET", url , true);
  request.send();

}

function loadData(data){
    var s="<select id='dropdown'><option name='default' id='default'></option>";


    for(var i=0;i<data.length;i++){
    //  s += data[i].name + "  age: " + data[i].age + " Hair Color: "+data[i].hairColor + "<br>";
      s +="<option name='"+data[i].name+"'  id='"+ data[i].name +"'  value='"+ data[i].name+"'>"+data[i].name+"</option>";


    }

    s+= "</select>";

    s+='<input type="Button" value="submit" onclick="validateForm();">';


      //setInterval(delay,2000);
    s+='<br>';


    for(var i=0;i<data.length;i++){
    //  s += data[i].name + "  age: " + data[i].age + " Hair Color: "+data[i].hairColor + "<br>";
      s +="<input type='checkbox' name='"+data[i].age+"'  id='"+ data[i].age +"'  value='"+ data[i].age+"'>"+data[i].age+"<br>";



    }

    s+='<br>';

    for(var i=0;i<data.length;i++){
    //  s += data[i].name + "  age: " + data[i].age + " Hair Color: "+data[i].hairColor + "<br>";
      s +="<input type='radio' value='"+ data[i].hairColor+"'>"+data[i].hairColor+"<br>";



    }






      document.getElementById('content').innerHTML = s;




}

function delay(){
  alert('ajax has retrieved data locally');
}

function validateForm(){

  var option = document.getElementById('dropdown').value;
  console.log(option);
  alert('you selected ' + option);

}
