window.onload=function(){
  go();
}

function go() {
  console.log('Sign-in state: ');
  // Additional params including the callback, the rest of the params will
  // come from the page-level configuration.
  var additionalParams = {
    'callback': signinCallback
  };

  // Attach a click listener to a button to trigger the flow.
  var signinButton = document.getElementById('signinButton');
  signinButton.addEventListener('click', function() {
    console.log('Sign-in state: ');
    gapi.auth.signIn(additionalParams); // Will use page level configuration
  });
}

function signinCallback(authResult) {
  if (authResult['status']['signed_in']) {
    // Update the app to reflect a signed in user
    // Hide the sign-in button now that the user is authorized, for example:
    document.getElementById('signinButton').setAttribute('style', 'display: none');
    gapi.auth.setToken(authResult);
    gapi.client.load('plus', 'v1').then(function() {
      var request = gapi.client.plus.people.get({
        'userId' : 'me'
      });

      request.execute(function(resp) {
        //document.getElementById('result').setAttribute('style', 'display: none');
        document.getElementById('result').innerHTML =
        "<h2> Hello "+resp.displayName+"</h2>"+
        "<p>"+resp.id+"</p>";
      });
    });

  } else {
    // Update the app to reflect a signed out user
    // Possible error values:
    //   "user_signed_out" - User is signed-out
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('Sign-in state: ' + authResult['error']);
  }
}
