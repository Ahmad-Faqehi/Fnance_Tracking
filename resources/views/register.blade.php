<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Tracking</title>
    
    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="/images/favicon.png" type="image/png"> -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💰</text></svg>">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

</head>
<body style="background-color: #f1f5f9;">
<div class="container py-5">

  <!-- For demo purpose -->
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-4">Create Free Account</h1>
    </div>
  </div>
  <!-- End -->


  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">

        <!-- Credit card form content -->
        <div class="tab-content">

          <!-- credit card info-->
          <div id="nav-tab-card" class="tab-pane fade show active">
          <form method="POST" action="/register">
          @csrf
              <div class="form-group">
                <label for="username">Your Name</label>
                <input type="text" id="username" required class="form-control" require>
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" required class="form-control" require>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="password" required class="form-control" require>
              </div>
              <div class="form-group">
                <label for="Password">Re-Password</label>
                <input type="password" id="re-password" required class="form-control" require>
              </div>

              <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm" id="sub-btn"> Create </button>
              <!-- <input type="submit" value="Create" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> -->
            </form>
            <small>Already has account? <a href="/login">login</a></small>
          </div>
          <!-- End -->


          <!-- Paypal info -->
          <div id="nav-tab-paypal" class="tab-pane fade">
            <p>Paypal is easiest way to pay online</p>
            <p>
              <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button>
            </p>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <!-- End -->

          <!-- End -->
        </div>
        <!-- End -->

      </div>
    </div>
  </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>



function ValidateEmail(input) {

var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

if (input.match(validRegex)) {
  return true;
} else {
  return false;
}

}

document.getElementById('sub-btn').onclick = function() {

    let name = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let repassword = document.getElementById("re-password").value;

if (!ValidateEmail(email)){

    swal({
  title: "Please Check your Email",
  text: "Your email in not valiad",
  icon: "warning"
  })

}else if(password !== repassword){

    swal({
  title: "Please Check your Password",
  text: "Your password in not match",
  icon: "warning"
  })

}else{
    axios.post('/register', {
    email: email,
    name: name,
    password: password,
  })
  .then(function (response) {
      
      if (response.data.type == "success"){
        swal({
        title: response.data.title,
        text: response.data.msg,
        icon: response.data.type,
        buttons: false
      })
        setTimeout(function () { location.href = "./dashboard";}, 3000);
      }else{
        swal({
        title: response.data.title,
        text: response.data.msg,
        icon: response.data.type,
      })
      }
  })
  .catch(function (error) {
    console.log(error);
  });

}



}




</script>
</body>
</html>