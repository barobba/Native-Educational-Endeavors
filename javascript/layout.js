
$(window).load(function(){
  
  var elementNames = ['.navigation', '.content', '.sidebar'];
  
  
  for (i in elementNames) {
    $(elementNames[i]).resize(resizeColumns);
  }
  resizeColumns();
  
});

function resizeColumns() {
  
  console.log('called');

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

  // Make columns the same height
  for (i in elementNames) {
    $(elementNames[i]).css('min-height', longer);
  }
  
}
