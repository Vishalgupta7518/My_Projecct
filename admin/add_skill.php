<?php
    require('functions/functions.php');
    addS();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="title icon" type="image/png" href="image/bs.png">
    <!-- Bootstrap CSS -->
    <!-- <link real="stylesheet" herf="./css/bootstrap.min.css"/>  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <title>Add Skill</title>
    <script>
        skillVal();
        // $(document).ready(function(){
        //     $('#btn').click(function(){

        //      if($('#sname').val()==""){
        //         // alert("Please Enter Skill Name");
        //         $('#span_name').html('**Please Enter Skill Name');
        //         $('#sname').focus();
        //         return false;
        //      }
            
        //      if($('#sname').val().length<3){
        //         // alert("Skill Name mast be of minnimum 3 char!");
        //         $('#span_name').html('**Skill Name mast be of minnimum 3 char!');
        //         $('#sname').val('');
        //         $('#sname').focus();
        //         return false;
        //      }

        //      if($.isNumeric($('#sname').val())){
        //         // alert("Skill Name mast be alphnumeric!");
        //         $('#span_name').html('**Skill Name mast be alphnumeric!');
        //         $('#sname').val('');
        //         $('#sname').focus();
        //         return false;
        //      }

        //     //  Description
        //     if($('#des').val()==""){
        //         // alert("Please Enter Description somethink word");
        //         $('#span_des').html('**Please Enter Description somethink word');
        //         $('#des').focus();
        //         return false;
        //      }
            
        //      if($('#des').val().length<10){
        //         // alert("Description mast be of minnimum 10 char!");
        //         $('#span_des').html('**Description mast be of minnimum 10 char!');
        //         $('#des').val('');
        //         $('#des').focus();
        //         return false;
        //      }

        //      if($.isNumeric($('#des').val())){
        //         // alert("Description mast be alphnumeric!");
        //         $('#span_des').html('**Description mast be alphnumeric!');
        //         $('#des').val('');
        //         $('#des').focus();
        //         return false;
        //      }
        //     //  skill icon

        //     if($('#iname').val()==""){
        //         // alert("Please Enter Skill icon Name");
        //         $('#span_iname').html('**Please Enter Skill icon Name');
        //         $('#iname').focus();
        //         return false;
        //      }
            
        //      if($('#iname').val().length<3){
        //         // alert("Skill icon name mast be of minnimum 3 char!");
        //         $('#span_iname').html('**Skill icon name mast be of minnimum 3 char!');
        //         $('#iname').val('');
        //         $('#iname').focus();
        //         return false;
        //      }

        //      if($.isNumeric($('#iname').val())){
        //         // alert("Skill icon Name mast be alphnumeric!");
        //         $('#span_iname').html('**Skill icon Name mast be alphnumeric!');
        //         $('#iname').val('');
        //         $('#iname').focus();
        //         return false;
        //      }

        //     })
        // });
    </script>
</head>
<body class="bg-light">
    <!-- <header class="row bg-dark sticky-top">
        <div class="col-4">
        <a href="#"class="navbar-brand"><i class="fas fa-child text-warning fa-2x ml-5"></i></a>
        </div>
        <div class="col-8">
            <h4 class="text-uppercase text-light my-2" >Welcome to Dashboard Admin</h4>
        </div>
    </header> -->
    
   <div class="container-fluid">
       <?php
            include('include.php');
        ?>
    <div class="row">
        <!-- <div class="col-lg-2 bg-dark" style="height: 100vh;">
          <nav class="navbar navbar-light">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-light text-uppercase font-weight-bold py-4">Skill</a>
            </li>
            <li class="nav-item">
                <a href="project.php" class="nav-link text-light text-uppercase font-weight-bold py-4">Project</a>
            </li>
            <li class="nav-item">
                <a href="team.php" class="nav-link text-light text-uppercase font-weight-bold py-4">Team</a>
            </li>
            <li class="nav-item">
                <a href="progress.php" class="nav-link text-light text-uppercase font-weight-bold py-4">Progress</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link text-light text-uppercase font-weight-bold py-4">Contact</a>
            </li>
            <li class="nav-item">
               <a href="../index.php" class="nav-link text-light text-uppercase font-weight-bold py-4" href="#">Logout</a>
            </li>
            </ul>
          </nav>
        </div> -->
        <?php
            include('sidebar_include.php');
        ?>

        <div class="col-lg-10 ">
          <section class="container-fluid p-5">
          <?php
              // if(isset($_GET['already_exist'])){
              //   echo "<span class='text-danger'>Limit already 3 skill add!</span>";
              // }

          ?>
            <div class="row justify-content-center">
               <div class="col-lg-6 col-md-8 col-sm-10 ">
                  <form action="" method="post" class="text-muted">

                   <div class="form-group">
                     <label for="name">Skill Name</label>
                     <input type="text" class="form-control" name="sname" id="sname" autofocus>
                     <span id="span_name" class="text-danger"></span>
                   </div>

                   <div class="form-group">
                     <label for="name">Description</label>
                     <!-- <input type="text" class="form-control" name="des" id="des"> -->
                     <textarea class="form-control" name="des" id="des" cols="30" rows="5"></textarea>
                     <span id="span_des" class="text-danger"></span>
                   </div>

                   <div class="form-group">
                     <label for="name">Icon Name</label>
                     <input type="text" class="form-control" name="iname" id="iname">
                     <span id="span_iname" class="text-danger"></span>
                   </div>
                   <button class="btn btn-outline-warning btn-block" name="btn_add_skill" id="btn">Add Skill</button>
                   <a href="index.php">Back</a>
                 </form>
                </div>
            </div>
          </section>
        </div>

    </div>
   </div> 
    
    
    <!-- Footer -->
    <footer class="bg-secondary fixed-bottom">
        <p class="text-light py-4 m-0" align="center">
             &copy;Copyright 2021 Made By CreativieWarriors
        </p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>