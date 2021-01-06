var mainApp = {};
(function(){
     var firebase = app_fireBase;
     var uid = null;
     firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
               var market;
               // User is signed in.
               if(user != null){
                    user.providerData.forEach(function (profile){
                         console.log("Marketer: " + profile.displayName);
                         market = profile.displayName;
                    });
               }
               uid = user.uid;
               console.log()
               if(uid){
                    uid = user.uid;
               }else{
                    uid = null;
                    firebase.auth().signOut();
               }

               //new stuff

               function logOut(){
               firebase.auth().signOut();
               }
               mainApp.logOut = logOut;
               function fetching(id){
                    return document.getElementById(id);
               }
               
               var sub = fetching("sub");
               var messageRef = firebase.database().ref('messages/users');
               function saveMessage(name,lname,phone,info,date,marketer){
                    var newMessageRef = messageRef.push();
                    newMessageRef.set({
                         Name: name,
                         Last_name: lname,
                         Phone: phone,
                         Info: info,
                         Date: date,
                         Marketer: marketer
                    });
               }
               
               console.log(messageRef);
               function fetch(obj){
                    return document.getElementById(obj);
               }
               
               var sub = fetch("sub");
               sub.addEventListener('click', (e)=>{
               
                    e.preventDefault();
                    var name = fetch("name").value;
                    var lname = fetch("lname").value;
                    var pnum = fetch("pnum").value;
                    var region = fetch("region").value;
                    var currentdate = new Date(); 
                    var datetime = "Date: " + currentdate.getDate() + "/"
                         + (currentdate.getMonth()+1)  + "/" 
                         + currentdate.getFullYear() + " Time: "  
                         + currentdate.getHours() + ":"  
                         + currentdate.getMinutes() + ":" 
                         + currentdate.getSeconds();
                    saveMessage(name,lname,pnum,region,datetime,market);
                    fetch("main_form").reset();
                    console.log("Data sent");
                    $(".alert").slideDown();
                    setTimeout(()=>{
                         $(".alert").slideUp();
                    }, 2000);
               });     
          }else{
               // redirect to the logIn page
               uid = null;
               window.location.replace("/index.html");
          }
     });
})();
