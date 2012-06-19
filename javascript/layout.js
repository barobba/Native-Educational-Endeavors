
$(document).ready(function(){
  var nav = $('.navigation');
  console.log(nav);
  var content = $('.content'); 
  var longer = nav.height() > content.height() ? nav.height() : content.height();
  nav.height(longer);
  content.height(longer);
});
