var mainApp = {};
(function(){
     var firebase = app_fireBase;
     var uid = null;
     var s;
     var latitude;
     var longitude;

     function success(data){
  
          var apikey = '45db3c31cfae4d4e90c23d301d447a61';
          latitude = data.coords.latitude;
          longitude = data.coords.longitude;
     
          var api_url = 'https://api.opencagedata.com/geocode/v1/json'
     
          var request_url = api_url
            + '?'
            + 'key=' + apikey
            + '&q=' + encodeURIComponent(latitude + ',' + longitude)
            + '&pretty=1'
            + '&no_annotations=1';
     
          // see full list of required and optional parameters:
          // https://opencagedata.com/api#forward
     
          var request = new XMLHttpRequest();
          request.open('GET', request_url, true);
     
          request.onload = function() {
            // see full list of possible response codes:
            // https://opencagedata.com/api#codes
     
            if (request.status === 200){ 
              // Success!
              var data = JSON.parse(request.responseText);
              //alert(data.results[0].formatted); // print the location
              s = data.results[0].formatted;
            } else if (request.status <= 500){ 
              // We reached our target server, but it returned an error
                                   
              console.log("unable to geocode! Response code: " + request.status);
              var data = JSON.parse(request.responseText);
              console.log('error msg: ' + data.status.message);
            } else {
              console.log("server error");
            }
          };
     
          request.onerror = function() {
            // There was a connection error of some sort
            console.log("unable to connect to server");        
          };
          request.send();  // make the request
     
     }
     navigator.geolocation.getCurrentPosition(success,console.error)
     
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
               var messageRef = firebase.database().ref('messages/marketers');
               function saveMessage(name,lname,phone,info,date,marketer,loc,lat,long){
                    var newMessageRef = messageRef.push();
                    newMessageRef.set({
                         Name: name,
                         Last_name: lname,
                         Phone: phone,
                         Info: info,
                         Date: date,
                         Marketer: marketer,
                         Location: loc,
                         Longitude: long,
                         Latitude: lat,
                     
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
                    saveMessage(name,lname,pnum,region,datetime,market,s,latitude,longitude);
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
