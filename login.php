<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
     <script src=" fireBase.js"></script>
     <script src="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.js"></script>
     <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.css" />
</head>
<body>
     <div id="container">
          <h2>LogIn</h2>
          <form action="" id="form">
               <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="uinput" class="form-control">
               </div>
               <div class="form-group">
                    <label for="pword">Password</label>
                    <input type="text" id="pword" class="form-control">
               </div>
               <button class="btn btn-primary">Submit</button>
          </form>
          <h1>Welcome to My Awesome App</h1>
          <div id="firebaseui-auth-container"></div>
          <div id="loader">Loading...</div>
     </div>
     <script>
          console.log("Hello World");
     </script>
     <script src="login.js"></script>
</body>
</html>