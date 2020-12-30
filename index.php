<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ghena Art Media Productions</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/main_css/main.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>
</head>
<body>
     <div id="container1" style="width: 90%; margin: auto;">
          <h2>Input field</h2>
          <form action="index.php" method="postd" id="main_form">
               <div class="form-group">
                    <label for="Name">Name:</label>
                    <input id="name" type="text" class="form-control" require>
                    <label for="Lname">Last name:</label>
                    <input id="lname" type="text" class="form-control" require>
                    <label for="Passport">Phone Number:</label>
                    <input id="pnum" type="text" class="form-control" require>
                    <label for="Region">Card number</label>
                    <input id="region" type="text" class="form-control" require>
                    <button id="sub" type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                    <button onclick = "mainApp.logOut()" class="btn btn-success" style="margin-top: 20px;">LogOut</button>
               </div>
          </form>
     </div>
     
     <?php 
          $simple = "This is a PHP variable"
     ?>
     <script src="fireBase.js"></script>
     <script type="text/javascript">
     
     function fetch(obj){
          return document.getElementById(obj);
     }
     // Initialize Firebase

     var messageRef = firebase.database().ref("name");
     console.log(firebase.database());
     function saveMessage(fname, lastname, phonenum, region){
          var newMessageRef = messageRef.push();
          newMessageRef.set({
               Name: fname,
               Lastname: lastname,
               Phone_Number: phonenum,
               Card_number: region,
          });
     }
     var sub = fetch("sub");
     sub.addEventListener('click', (e)=>{

          e.preventDefault();
          var name = fetch("name").value;
          var lname = fetch("lname").value;
          var pnum = fetch("pnum").value;
          var region = fetch("region").value;

          saveMessage(name,lname,pnum,region);

          let valname = name.value;
          let vallname = lname.value;
          let valpnum = pnum.value;
          let valreg = region.value;
          var valtable = document.getElementById('table');

          e.preventDefault();
          fetch("main_form").reset();
          console.log("Data sent");

     });
     var counter = 0;
     var counter2 = 0;

     console.log("The 'it' counter is: " + counter);
     console.log("The '.' count is: " + counter2);
     var sub = document.getElementById('sub');
     var lnameinput = document.getElementById('lname');
     var pnuminput = document.getElementById('pnum');
     var regioninput = document.getElementById('region');
     var nval = name.value;

     var nameinput = document.getElementById('name');



     </script>
     <script src="main.js"></script>
</body>
</html>