<?php include "../controllers/customer_controller.php"; 
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    
  <!--make username textbox-->
  <h4>Name</h4>
  <input type="text" name="u_name" placeholder="Enter your name" id="username" required>

  <!--make email text box--> 
  <h4>Email</h4>
  <input type="email" name="cusemail" placeholder="Enter your email" id="customeremail" required> 

  <!-- create Password form. -->
  <h4>Password</h4>
  <input type="password" name="cuspassword" placeholder="Enter your password" id="passwd" required>
  
  <!-- create re-enter Password form. -->
  <h4>Re-enter Password</h4>
  <input type="password" name="re_password" placeholder="Re-enter your password" id="re_passwd" required> 

  <!--make country text box--> 
  <h4>country</h4>
  <input type="text" name="cuscountry" placeholder="Enter your country" id="customercountry" required>  

  <!--make city text box--> 
  <h4>city</h4>
  <input type="text" name="cuscity" placeholder="Enter your city" id="customercity" required>  

  <!--make telephone number text box--> 
  <h4>telephone</h4>
  <input type="text" name="tele" placeholder="Enter your phone number" id="telnumber" required> 


  <br>
  <br>
  <!--submit button-->
  <input type="submit" name="registerinfo" id="signup_btn" value="Sign-Up" onclick="testajax()">
  <!-- <button>Sign-Up</button> -->


  
  <br>
  <br> 
  <!-- <p id="content"></p> -->
  
  <!--back to index button-->
  <button type="button" onclick="location.href='../index.php'">Return to Index</button>
    

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

</body>
</html>