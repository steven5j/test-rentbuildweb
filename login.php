<?php
require_once('sql.php');
if(!empty($_SESSION['user'])) plo("admin.php");
$mainzone=(empty($_GET['p']))?"dashbords":$_GET['p'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.css" />
   <!-- google fonts -->
   <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">

  <style>

    .sign-up-box {
      background: #12375B;
      color: #fff;

    }

    .login-box {
      box-shadow: 0px 0px 3px #343a40;
    }

    .login-body-bg {
      background-image: url(img/login-body-img.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      filter: opacity(.2);
    }

    .login-bode-bg-contain {
      position: fixed;
      top: 0px;
      left: 0px;
    }
  </style>
</head>

<body class=" mx-0 my-0 ">
  <div class="login-body-bg vw-100 vh-100"></div>
  <div class="login-bode-bg-contain vh-100 vw-100">
    <div class="container flex-row align-items-center h-100 vw-100  ">

      <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
        <div class="col-12  col-lg-10 h-75 row justify-content-center  bg-light px-0 login-box">
        <div class="col-sm-7 px-0 d-flex align-items-center col">
       
            <div class="card-body">
            <form method="post" action="api.php?do=check">
              <div class="text-center"><img src="./img/eagle_logo.svg" width="100px;" alt=""></div>
              <br />
              <h3 class="card-title text-center">Sign In</h5>
                <p class="card-text text-center"style="font-family: 'Noto Sans TC', sans-serif;">輸入您的帳號和密碼以登入查看使用。</p>
                <br />
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1" name="acc">
                </div>

                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </span>
                  </div>
                  <input class="form-control" type="password" placeholder="Password" aria-label="Password"
                    aria-describedby="basic-addon2"name="pwd">
                </div>
                <br />
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit" onclick="login">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button"style="font-family: 'Noto Sans TC', sans-serif;">忘記密碼?</button>
                  </div>


                </div>
                </form>
            </div>
            
          </div>

          <!-- 註冊 -->
          <div class="col-sm-5 px-0 sign-up-box d-sm-flex align-items-center border-0 col-2 ">
          <div class="d-flex align-items-center justify-content-center d-sm-none flex-column text-center w-100 h-100 font-weight-bold"> 
            <h5>Sign Up</h5>
          <button class="btn btn-primary" type="button"style="font-family: 'Noto Sans TC', sans-serif;">Click!!</button>
  </div>  
 
            <div class="card-body d-sm-block d-none">
              <h3 class="card-title text-center">Sign Up</h3>
                <br />
                <div class="text-center">
                  <button class="btn btn-primary px-4  " type="button"style="font-family: 'Noto Sans TC', sans-serif;">現在註冊!</button>
                </div>


            </div>
          </div>



        </div>



      </div>
    </div>

<!-- jquery 載入 -->
<script src="./js/jquery-3.4.1.min.js"></script>
<!-- bootstrap-->
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.js"></script>
<!--  -->
    <script src="./js/sweetalert2.all.min.js"></script>



  //   <!-- <script>
  // //   Swal.fire({
  // //     type: 'error',
  // //     title: 'Oops...',
  // //     text: 'Something went wrong!',
  // //     footer: '<a href>Why do I have this issue?</a>'
  // //   });
    
  
  // // alert('帳號或密碼錯誤');
  // // ".jlo("login.php").";
  
  // </script> -->

</body>

</html>