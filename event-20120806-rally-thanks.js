$(document).ready(function(){
  $.ajax({
    url: 'event-20120806-rally-thanks.txt'
  })
  .success(function(data, status, response){
    var thankYouList = $('.special-thanks-list');
    $(data.split("\n")).each(function(index, item){
      if (item.length > 0) {
        thankYouList.append(
          '<div class="thank-you-item">'+item+'</div>'
        );
      }
    });
    
  }).error(function(response, status, errorThrown){
    console.log('Error retrieving thank you list.');
  });
});
