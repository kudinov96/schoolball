<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
   <div class="row">
    <div class="col-md-12">
                   <div class="row">
                       <div class="col-md-12">
                      <h3><center> <img src="sd.PNG" width="5%"/>
                                    Firebase Phone Auththentication With Laravel</center></h3>
                       </div>
                   </div>
               <div>
                   <form id="sign-in-form" action="#">
                   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <input class="mdl-textfield__input" type="text" pattern="\+[0-9\s\-\(\)]+"

                                                         id="phone-number">
                     <label class="mdl-textfield__label" for="phone-number">
                                                         Enter your Mobile number..</label>
                     <span class="mdl-textfield__error">Input is not an international M number!</span>
                   </div>

                   <button class="btn btn-primary" id="sign-in-button">Sign-in</button>
                 </form>

                 <button class="mdl-button mdl-js-button mdl-button--raised" id="sign-out-button">
                 Sign-out</button>
                 <form id="verification-code-form" action="#">
                   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <input class="mdl-textfield__input" type="text" id="verification-code">
                     <label class="mdl-textfield__label" for="verification-code">
                      Enter the verification code...</label>
                   </div>
                   <input type="submit" class="btn btn-success"

                    id="verify-code-button" value="Verify Code"/>
                   <button class="btn btn-danger" id="cancel-verify-code-button">Cancel</button>
                 </form>
               </div>
   </div>
   </div>
   <br />
   <br />
   <div class="row">
       <div class="col-md-12">
           <div class="card card-default">
               <div class="card-header">
                   <div class="row">
                       <div class="col-md-12">
                           <h4>User Login Information</h4>
                       </div>
                   </div>
               </div>

               <div>
                   <div>
                       Firebase sign-in status: <span id="sign-in-status">Unknown</span>
                       <div>Firebase auth <code>User Details</code> object value:</div>
                       <pre><code id="account-details">No User Login</code></pre>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDqbTrroBnh14P0eIH09Kxe7zCEyg9U_bM",
    authDomain: "school-ball-5b9e2.firebaseapp.com",
    databaseURL: "https://school-ball-5b9e2.firebaseio.com",
    projectId: "school-ball-5b9e2",
    storageBucket: "school-ball-5b9e2.appspot.com",
    messagingSenderId: "981110956853",
    appId: "1:981110956853:web:035680007ea60251f1a27c",
    measurementId: "G-HYEHT80WWC"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  window.onload = function() {
   // Listening for auth state changes.
   firebase.auth().onAuthStateChanged(function(user) {
     if (user) {
       // User is signed in.
       var uid = user.uid;
       var email = user.email;
       var photoURL = user.photoURL;
       var phoneNumber = user.phoneNumber;
       var isAnonymous = user.isAnonymous;
       var displayName = user.displayName;
       var providerData = user.providerData;
       var emailVerified = user.emailVerified;
     }
     updateSignInButtonUI();
     updateSignInFormUI();
     updateSignOutButtonUI();
     updateSignedInUserStatusUI();
     updateVerificationCodeFormUI();
   });

   document.getElementById('sign-out-button').addEventListener('click', onSignOutClick);
  document.getElementById('phone-number').addEventListener('keyup', updateSignInButtonUI);
  document.getElementById('phone-number').addEventListener('change', updateSignInButtonUI);
  document.getElementById('verification-code').addEventListener('keyup', updateVerifyCodeButtonUI);
  document.getElementById('verification-code').addEventListener('change', updateVerifyCodeButtonUI);
  document.getElementById('verification-code-form').addEventListener('submit', onVerifyCodeSubmit);
  document.getElementById('cancel-verify-code-button').addEventListener('click', cancelVerification);

  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button', {
    'size': 'invisible',
    'callback': function(response) {
      onSignInSubmit();
    }
  });

  recaptchaVerifier.render().then(function(widgetId) {
    window.recaptchaWidgetId = widgetId;
    updateSignInButtonUI();
  });
  };

  
</script>
