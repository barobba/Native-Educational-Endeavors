
$(window).load(function(){

  // Elements to make the same height
  var elementNames = ['.navigation', '.content', '.sidebar'];

  // Find out the longest element
  var longer = 0;
  for (i in elementNames) {
    if (longer < $(elementNames[i]).height()) {
      longer = $(elementNames[i]).height();
    }
    else {
      // Already longer
    }
  }
  
  for (i in elementNames) {
    $(elementNames[i]).height(longer);
  }
  
});
