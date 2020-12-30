console.log("Hello world ace");
var app_fireBase = {};
(function(){
     var firebaseConfig = {
          apiKey: "AIzaSyCmsHnQyh1Rb8Zun6nu5bB3-uUgfS5dinc",
          authDomain: "ghena-art-productions.firebaseapp.com",
          databaseURL: "https://ghena-art-productions-default-rtdb.europe-west1.firebasedatabase.app",
          projectId: "ghena-art-productions",
          storageBucket: "ghena-art-productions.appspot.com",
          messagingSenderId: "261034798919",
          appId: "1:261034798919:web:c9c1e50213cadac9ade662",
          measurementId: "G-GWLG89NV05"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        app_fireBase = firebase;
})()
