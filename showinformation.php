<html>
<head>
<meta name="google-signin-clientid" content="1074302660216-a693sbd2ght96v6a5l4amrp91cekeuk2.apps.googleusercontent.com" />
<meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.login" />
<meta name="google-signin-requestvisibleactions" content="http://schema.org/AddAction" />
<meta name="google-signin-cookiepolicy" content="single_host_origin" />
<meta name="google-signin-callback" content="signinCallback" />
<script src="https://apis.google.com/js/client:platform.js?onload=render" async defer>
/* Executed when the APIs finish loading */
function render() {

  // Additional params
  var additionalParams = {
    'theme' : 'dark'
  };

  gapi.signin.render('myButton', additionalParams);
}
</script>
</head>
<body>
<!-- In the callback, you would hide the gSignInWrapper element on a
successful sign in -->
<div id="gSignInWrapper">
  <div id="myButton" class="classesToStyleWith">
    Sign in with Google
  </div>
</div>
</body>
</html>