var send = false;
function validate() {

  // var x = document.getElementById('heading');
  // x.innerHTML = "TRUE";
  send = true;
  //get all the elements first
  var name = document.myform.name.value;
  var email = document.myform.email.value;
//  var day = document.myform.day.value;
//  var month = document.myform.month.value;
//  var year = document.myform.year.value;
  var gender = document.myform.gender.value;
  var addr1 = document.myform.addr1.value;
  var addr2 = document.myform.addr2.value;
  var city = document.myform.city.value;
  var zip = document.myform.zip.value;
  var date = document.myform.date.value;
  var date1 = new Date(date);

  var day = date1.getDay();
  var month = date1.getMonth() + 1;
  var year = date1.getFullYear();





  //a. validation - all fields mandatory
  if (name.length == 0) {


    document.myform.name.focus();
    alert('you must enter a name: Eric Strong');
    send = false;


  }
  if (email.length == 0) {

    document.myform.email.focus();
      alert('you must enter an email: example@domain.com');
          send = false;
  }

  if (day.length == 0) {

    document.myform.day.focus();
      alert('you must enter a day: 1-31');
          send = false;
  }
  if (month.length == 0) {

    document.myform.month.focus();
      alert('you must enter a month: 1-12');
          send = false;

  }
  if (year.length == 0) {

    document.myform.year.focus();
      alert('you must enter a year : yyyy');
          send = false;

  }
  if (gender.length == 0) {

    document.myform.gender.focus();
      alert('you must enter a gender: select one');
          send = false;

  }
  if (addr1.length == 0) {

    document.myform.addr1.focus();
      alert('you must enter an address 1: number street');
          send = false;

  }

  if (addr2.length == 0) {

    document.myform.addr2.focus();
      alert('you must enter an address 2: road place');
          send = false;

  }

  if (city.length == 0) {

    document.myform.city.focus();
    alert('you must enter a city: city name');
        send = false;

  }

  if (zip.length == 0) {

    document.myform.zip.focus();
      alert('you must enter a zip: example Db 1');
          send = false;

  }


  //b. check if name has lettes only
  lettersOnly(name, "name");

  //c. email is a valid email
  validEmail(email);

  //d. valid date and not in the future


  validDate(day,month,year);

  //e. checking gender is not left blank
  validateGender(gender);

  //f. validating City has letters only
  lettersOnly(city, "City");

  //g. Zip code has at least one letter followed by a white space, followed by at least one digit
  validateZip(zip);



} //end validate

function lettersOnly(element, field) {
  var letters = /^[A-Za-z]+$/;

  if (!element.match(letters)) {
    alert(field + " Must contain letters only!");
        send = false;

  }

} //end nameLettersOnly

function validEmail(element) {
  var email = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;


  if (!element.match(email)) {
    alert("not a valid email");
        send = false;

  }

}//end validEmail


function validDate(day,month,year){
  //check if date is a valid one
  var now = new Date();
  var yearNow = now.getFullYear();
  var monthNow = now.getMonth();





  if(year > yearNow && month > monthNow ){
    alert("not a valid date :" + givenDate);
        send = false;
  }

  if(year > yearNow){
    alert("not a valid year :" + year);
        send = false;

  }

  if(day > 31 || day < 1 ){
      alert("not a valid day :" + day);
          send = false;
  }

  if(month > 12 || month < 1){
    alert("not a valid month :" + month);
        send = false;
  }

  if(month == 2){
      var isLeapYear = isleap(year);
      if(!isLeapYear){
          if(day > 28){
              alert("not a valid day for feb  :" + day);
                  send = false;
          }
      }
  }



}//end validateDate

function isleap(yr)
{

 if ((parseInt(yr)%4) == 0)
 {
  if (parseInt(yr)%100 == 0)
  {
    if (parseInt(yr)%400 != 0)
    {
    //alert("Not Leap");
    return "false";
    }
    if (parseInt(yr)%400 == 0)
    {
  //  alert("Leap");
    return "true";
    }
  }
}
}

function validateGender(gender){
  if(gender == "X"){
    alert("you cannot leave gender blank");
        send = false;
  }
}

function validateZip(element){
  var zip = /[a-z]+\s\d+/;

  if (!element.match(zip)) {
    alert("not a valid zip code");
        send = false;

  }
}
