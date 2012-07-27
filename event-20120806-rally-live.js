// FB app
window.fbAsyncInit = function() {
  
  FB.init({
    appId      : '219706154819433', // App ID
    channelUrl : 'http://nativeed.com/_fb-channel.php', // Channel File
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // List the albums
  FB.api('NativeEducationalEndeavorsInc/albums', function(response){
    console.log('Albums');
    for (albumIdx in response.data) {
      var album = response.data[albumIdx];
      console.log(album.name + ', ' + album.id);
    }
  });

  // List information about an album
  var albumID = '181830951949517';
  FB.api(albumID + '/photos', function(response){
    // Display an album's photos
    console.log('\nThe chosen album');
    console.log(response);
    for (photoIdx in response.data) {
      var photo = response.data[photoIdx];
      $('#fb-charitable-gallery').append(
          $('<a href="'+photo.link+'">').append($('<img>').attr('src', photo.images[6].source))
      );
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
