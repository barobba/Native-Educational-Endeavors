$(window).load(function(){
  
  var nav = $('.navigation');
  var content = $('.content');
  var sidebar = $('.sidebar');
  var elements = [nav, content, sidebar];

  var longer = 0;
  for (i in elements) {
    console.log(elements[i].height());
    longer = longer > elements[i].height() ? longer : elements[i].height();
  }
  console.log(longer);
  
  for (i in elements) {
    elements[i].height(longer);
    elements[i].css('height', longer);
  }
  
});
