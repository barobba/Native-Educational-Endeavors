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
  var albumID = '181830951949517';
  FB.api(albumID + '/photos', function(response){
    for (photoIdx in response.data.reverse()) {
      var photo = response.data[photoIdx];
      var picture = $($('#fb-charitable-template').html());
      $(picture).find('a#fb-link').attr('href', photo.link);
      $(picture).find('img#picture').attr('src', photo.images[4].source);
      $(picture).find('#caption-section a.caption').html(photo.name);
      $('#fb-charitable-gallery').append(picture);
    }
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
