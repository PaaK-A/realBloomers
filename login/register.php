<?php include "../controllers/customer_controller.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Bloomers</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../assets/img/background2.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h3>Welcome To Bloomers</h3>
              </div>
              <p class="login-card-description">Sign Up</p>
              
                <div class="form-group">
                <label for="u_name" >Username</label>
                <input type="text" name="u_name" placeholder="Enter your name" id="username" class="form-control" required>
                </div>
                
                <div class="form-group">
                <label for="customeremail" >Email</label>
                <input type="email" name="cusemail" placeholder="Enter your email" id="customeremail" class="form-control" required> 
                </div>
                <div class="form-group mb-4">
                <label for="password" >Password</label>
                <input type="password" name="cuspassword" placeholder="Enter your password" id="passwd" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                <label for="re_password" >Re-enter Password</label>
                <input type="password" name="re_password" placeholder="Re-enter your password" id="re_passwd" class="form-control" required> 
                </div>
                <div class="form-group">
                <label for="customercountry">Country:</label>
                <input type="text" name="cuscountry" placeholder="Enter your country" id="customercountry" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="customercity">City:</label>
                <input type="text" name="cuscity" placeholder="Enter your city" id="customercity" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="tele">Contact No.</label>
                <input type="number" name="tele" id="telnumber" class="form-control" placeholder="XXX-XXXX-XXXX">
                </div>
                <input name="registerinfo" id="signup_btn" class="btn btn-block login-btn mb-4" type="submit" value="Signup" onclick="testajax()">
                
                <p class="login-card-footer-text">You have an account? <a href="login.php" class="text-reset">Sign In here</a></p>
                <nav class="login-card-footer-nav">
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <script>
      
    function testajax() {
      //alert("yes")
      let password1= $("#passwd").val();
      let password2= $("#re_passwd").val();
      let checkphonenum= $("#telnumber").val();
      var phoneno = /^\d{10}$/;

      if(password1 != password2){
        alert("Password is incorrect");
      }

      else if(!checkphonenum.match(phoneno)){
        alert("Phone number format is wrong.");
      }

      else{
        $.ajax({
          type: 'POST',
          url: 'ajaxregisterprocess.php',
          data:  {
            username: $('#username').val(),
            email: $("#customeremail").val(),
            password: $("#passwd").val(),
            country: $("#customercountry").val(),
            city: $("#customercity").val(),
            telephone: $("#telnumber").val()
          } ,
          success: function(data,status) {
              // alert('AJAX call was successful!');
              //$('#content').html(data);
              alert(data);
              window.location.replace('login.php');
          },
          error: function (xhr, ajaxOptions, thrownError) {
              alert("Error:"+xhr.status);
              alert(thrownError);
          }
        });
      }
    }
  </script>


  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
