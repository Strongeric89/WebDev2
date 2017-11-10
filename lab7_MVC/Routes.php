<?php
Route::set('index', function(){
Index::CreateView('Index');

});


Route::set('about-us', function(){
  echo "about us page";
Aboutus::CreateView('Aboutus');

});

Route::set('contact-us', function(){
  echo "contact us page ";
  Contactus::CreateView('Contactus');
});


 ?>
