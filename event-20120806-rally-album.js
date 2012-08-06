// FB app
window.fbAsyncInit = function() {
  
  FB.init({
    appId      : '219706154819433', // App ID
    channelUrl : 'http://nativeed.com/_fb-channel.php', // Channel File
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });
  
  
  // Display the album
  $(".fb-album").each(function(index, element){
    
    var albumID = $(element).attr('id');
    var albumSelector = '#'+albumID+'.fb-album';
    
    FB.api(albumID + '/photos', function(response){
      for (photoIdx in response.data) {
        var photo = response.data[photoIdx];
        var picture = $($('#fb-hospitality-template').html());
        $(picture).attr('href', photo.link);
        $(picture).find('img#picture').attr('src', photo.images[6].source);
        $(albumSelector).append(picture);
      }
      FB.api(albumID, function(album){
        $(albumSelector).append('<div class="caption"><a target="_blank" href="'+album.link+'">Facebook Album: '+album.name+'</a></div>');
      });
    });
    

  });

  
};

(function(d){
  //Load the SDK Asynchronously
  var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js";
  ref.parentNode.insertBefore(js, ref);
}(document));
