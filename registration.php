<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>

    <div id="loader">
        <div id="status">&nbsp;</div>
      </div>
        <!-- top heading -->
        <h1 class="login-main-heading"></h1>
        <!-- main container -->
        <div class="registration-form">
        <h1 class="registration-heading">Register your Account</h1>
          <form method="post" enctype="multipart/form-data" action="./modal/registrationModal.php">
                <div class="input-field">
                    <label for="first-name">First Name</label><br>
                    <input type="text" class="input" name="firstname" placeholder="First Name" required>
                </div>
  
                <div class="input-field">
                  <label for="last-name">Last Name</label><br>
                  <input type="text" class="input" name="lastname" placeholder="Last Name" required>
              </div>
  
              <div class="input-field">
                  <label for="email">Email</label><br>
                  <input type="email" class="input" name="email" placeholder="Email" required>
              </div>
  
              <div class="input-field">
                  <label for="phone">Phone</label><br>
                  <input type="tel" class="input"  name="phone" placeholder="Phone" required>
              </div>

              <div class="input-field">
                <label for="password">Password</label><br>
                <input type="password" class="input" name="password" required>
              </div>

              <div class="input-field">
                <label for="phone">Photo</label><br>
                <input type="file" class="input" name="img" required>
              </div>

              <div class="input-field">
                  <input type="submit" class="btn" name="register" value="Register">
              </div>


          </form>
            
        </div>
    <script src="js/app.js"></script>
</body>
</html>