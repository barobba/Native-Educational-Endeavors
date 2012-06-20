$(document).ready(function(){
  
  var nav = $('.navigation');
  var content = $('.content');
  var sidebar = $('.sidebar');
  
  var elements = [nav, content, sidebar];

  var longer = 0;
  for (i in elements) {
    longer = longer > elements[i].height() ? longer : elements[i].height();
  }
  
  for (i in elements) {
    elements[i].height(longer);
  }
  
});
