var mainApp = {};
(function(){
     var firebase = app_fireBase;
     var uid = null;
     firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
            // User is signed in.
            uid = user.uid;
          }else{
               // redirect to the logIn page
               uid = null;
               window.location.replace("/index.html");
          }
     });
     function logOut(){
          firebase.auth().signOut();
     }
     mainApp.logOut = logOut;
})();
function fetching(id){
     return document.getElementById(id);
}
var sub = fetching("sub");
var messageRef = firebase.database().ref('messages/users');
function saveMessage(name,lname,phone,info,date){
     var newMessageRef = messageRef.push();
     newMessageRef.set({
          Name: name,
          Last_name: lname,
          Phone: phone,
          Info: info,
          Date: date
     });
}
console.log(messageRef);