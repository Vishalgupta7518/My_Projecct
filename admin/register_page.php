<?php
    require('functions/functions.php');
    registerpage()
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="title icon" type="image/png" href="image/bs.png">
    <!-- Bootstrap CSS -->
    <!-- <link real="stylesheet" herf="./css/bootstrap.min.css"/>  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <title>Registation Page</title>
    <script>
        $(document).ready(function(){
            $('#btn').click(function(){
                // username
                if($('#user').val()==""){
                    $('#suser').html('** please enter username');
                    $('#user').focus();
                    return false;
                }

                if($('#user').val().length<3){
                    $('#suser').html('** username atleast 3 char!');
                    $('#user').val('');
                    $('#user').focus();
                    return false;
                }

                if($.isNumeric($('#user').val())){
                    $('#suser').html('** username alphanumeric!');
                    $('#user').val('');
                    $('#user').focus();
                    return false;
                }
                // password

                if($('#pass').val()==""){
                    $('#spass').html("** please enter password");
                    $('#pass').focus();
                    return false;
                }

                if($('#pass').val().length<5){
                    $('#spass').html("** password atleast 5 char!");
                    $('#pass').val('');
                    $('#pass').focus();
                    return false;
                }

                if($.isNumeric($('#pass').val())){
                    $('#spass').html("** password alphanumeric!");
                    $('#pass').val('');
                    $('#pass').focus();
                    return false;
                }
                // conform password

                if($('#cpass').val()==""){
                    $('#scpass').html("** please enter con.password");
                    $('#cpass').focus();
                    return false;
                }

                if(!($('#cpass').val()==$('#pass').val())){
                    $('#scpass').html('password and con.password not matching');
                    $('#cpass').val('');
                    $('#cpass').focus();
                    return false;
                }
            })
        })
    </script>
  </head>
  <body>
    <!-- Nav -->
      <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">

          <a href="#"class="navbar-brand"><i class="fas fa-child text-warning fa-2x"></i></a>
          
        <button type="button" class="navbar-toggler bg-light"data-toggle="collapse" data-target="#nav">
         <span class="navbar-toggler-icon"></span>
        </button>
         
        <div class="collapse navbar-collapse" id="nav">
          <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="../index.php">Home</a></li>
          </ul>
        </div>
            <a class="nav-link text-primary text-uppercase font-weight-bold px-3" href="register_page.php">Register</a>
            <a class="nav-link text-primary text-uppercase font-weight-bold px-3" href="admin_login.php">Login</a>
      </nav>

      <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card my-4 shadow">
                <div class="card-header bg-primary text-light text-center">
                    <h5>Registation From</h5>
                </div>
                <div class="card-body bg-light">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">username</label>
                        <input type="text" name="username" class="form-control" placeholder="username" id="user" autofocus>
                        <span id="suser" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="password" id="pass">
                        <span id="spass" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Con. password</label>
                        <input type="text" name="cpassword" class="form-control" placeholder="con.password" id="cpass">
                        <span id="scpass" class="text-danger"></span>
                    </div>
                    <button class="btn btn-danger btn-block" name="btnn" id="btn">Register</button>
                </form>
                <a href="admin_login.php" class="text-danger">Login</a>
                </div>
                
            </div>
        </div>
      </div>
           
      <!-- Footer -->
        <footer class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="text-white font-weight-light text-capitalize">
                            Pure Bootstrap Project
                        </h1>
                        <h3 class="text-light font-weight-light font-italic mb-3">
                            Lorem ipsum dolor sit amet.
                        </h3>
                        <div class="py-2">
                            <a href="#">
                                <i class="fab fa-facebook fa-2x text-primary mx-3"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-google-plus fa-2x text-danger mx-3"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter fa-2x text-info mx-3"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-youtube fa-2x text-danger mx-3"></i>
                            </a>  
                        </div>
                        <p class="text-light py-4 m-0">
                            &copy;Copyright 2021 Made By CreativieWarriors
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>