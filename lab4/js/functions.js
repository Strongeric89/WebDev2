
function validate(flag) {

  flag = false;
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



    alert('you must enter a name: Eric Strong');
      document.myform.name.focus();
      return false;
    flag = false;


  }
  if (email.length == 0) {


    //document.getElementById("email").focus();
      alert('you must enter an email: example@domain.com');
                flag = false;
                  return false;

  }

  // if (day.length == 0) {
  //
  //   document.myform.day.focus();
  //     alert('you must enter a day: 1-31');
  //
  //             flag = false;
  // }
  // if (month.length == 0) {
  //
  //   document.myform.month.focus();
  //     alert('you must enter a month: 1-12');
  //
  //             flag = false;
  //
  // }
  // if (year.length == 0) {
  //
  //   document.myform.year.focus();
  //     alert('you must enter a year : yyyy');
  //
  //             flag = false;
  //
  // }
  if (gender.length == 0) {


      alert('you must enter a gender: select one');
      document.myform.gender.focus();
              flag = false;
                return false;

  }
  if (addr1.length == 0) {


      alert('you must enter an address 1: number street');
      document.myform.addr1.focus();

                flag = false;
                  return false;

  }

  if (addr2.length == 0) {


      alert('you must enter an address 2: road place');
      document.myform.addr2.focus();

              flag = false;
                return false;

  }

  if (city.length == 0) {


    alert('you must enter a city: city name');
    document.myform.city.focus();

            flag = false;
              return false;

  }

  if (zip.length == 0) {


      alert('you must enter a zip: example Db 1');
      document.myform.zip.focus();

              flag = false;
                return false;

  }



  //b. check if name has lettes only
   flag = lettersOnly(name, "name");

  //c. email is a valid email
  flag = validEmail(email);

  //d. valid date and not in the future


//  flag = validDate(day,month,year);

  //e. checking gender is not left blank
  flag = validateGender(gender);

  //f. validating City has letters only
  flag = lettersOnly(city, "City");

  //g. Zip code has at least one letter followed by a white space, followed by at least one digit
  flag = validateZip(zip);

  if(flag == true){
      alert('Thank you for your details');
      var x = document.getElementById("container");
      x.style.display = "none";

      return true;


  }else{
    return false;
  }



} //end validate

function lettersOnly(element, field) {
  var letters = /^[a-zA-Z\s]*$/;

  if (!element.match(letters)) {
    alert(field + " Must contain letters only!");
    document.myform.name.focus();
        return false;

  }
  return true;

} //end nameLettersOnly

function validEmail(element) {
  var email = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;


  if (!element.match(email)) {
    alert("not a valid email");
    document.myform.email.focus();
      return false;

  }
    return true;

}//end validEmail


function validDate(day,month,year){
  //check if date is a valid one
  var now = new Date();
  var yearNow = now.getFullYear();
  var monthNow = now.getMonth();

  if(year > yearNow && month > monthNow ){
    alert("not a valid date :" + givenDate);
            return false;
  }

  if(year > yearNow){
    alert("not a valid year :" + year);

            return false;

  }

  if(day > 31 || day < 1 ){
      alert("not a valid day :" + day);

              return false;
  }

  if(month > 12 || month < 1){
    alert("not a valid month :" + month);

            return false;
  }

  if(month == 2){
      var isLeapYear = isleap(year);
      if(!isLeapYear){
          if(day > 28){
              alert("not a valid day for feb  :" + day);
                      return false;
          }
      }
        return true;
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
  return true;
}

function validateGender(gender){
  if(gender == "X"){
    alert("you cannot leave gender blank");
            return false;
  }
    return true;
}

function validateZip(element){
  var zip = /[a-z]+\s\d+/;

  if (!element.match(zip)) {
    alert("not a valid zip code");
            return false;

  }
    return true;

}
