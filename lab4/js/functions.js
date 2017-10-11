function check_form(){
    var fields = ["name_text", "email_text", "day_text", "month_text", "year_text", "select_gender", "addr1_text", "addr2_text", "city_text","zip_text",];
    var fieldname;

    lettersOnly();
    validEmail();

    for(var i = 0; i < fields.length; i++){
      fieldname = fields[i];

      if (document.forms["personal_info"][fieldname].value === "") {
          alert(fieldname + " Must be filled out");
          document.forms["personal_info"][fieldname].focus();
          return false;
      }//end if
    }//end for
    return true;
}// end check_form

function lettersOnly(){
  var letters = /^[A-Za-z]+$/;
  var inputtxt = document.forms["personal_info"]["name_text"].value;

  if(!inputtxt.match(letters)){
    alert("name_text must contain letters only!");
        document.forms["personal_info"]["name_text"].focus();
      }

}

function validEmail(){
  var email = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  var inputtxt = document.forms["personal_info"]["email_text"].value;

 if(!inputtxt.match(email)){
   alert("not a valid email");
       document.forms["personal_info"]["email_text"].focus();
     }

}

function validDOB(){
  var pattern =/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;

  var day = document.forms["personal_info"]["day_text"].value;
    var day = document.forms["personal_info"]["month_text"].value;
      var day = document.forms["personal_info"]["year_text"].value;

 if(!inputtxt.match(email)){
   alert("not a Date of Birth");
       //document.forms["personal_info"]["email_text"].focus();
     }

}
