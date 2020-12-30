<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Main</title>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
     <script src="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/main_css/main.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>

</head>
<body>
     <div class="container">
     <h2>Customer info</h2>
          <form action="" id="m_form">
               <div class="form-group">
                    <label for="name">Name:</label>
                    <input id="nameid" type="text" class="form-control">
               </div>
               <div class="form-group">
                    <label for="LastName">Last name:</label>
                    <input id="lname" type="text" class="form-control">
               </div>
               <div class="form-group">
                    <label for="number">Number:</label>
                    <input id="num" type="number" class="form-control">
               </div>
               <div class="form-group">
                    <label for="info">Info:</label>
                    <input id="info" type="text" class="form-control">
               </div>
               <button class="btn btn-success" id="sub">Submit</button>
               <button onclick = "mainApp.logOut()" class="btn btn-primary">LogOut</button>
          </form>
     </div>
     <script src="fireBase.js"></script>
     <script src="main.js"></script>
</body>
</html>