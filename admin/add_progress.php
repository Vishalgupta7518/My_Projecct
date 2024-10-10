<?php
   require('functions/functions.php');
   add();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="title icon" type="image/png" href="image/bs.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <title>Add Progress</title>
    <script>
        progressVal();
        // $(document).ready(function(){
        //     $('#btn').click(function(){

        //      if($('#pname').val()==""){
        //         alert("Please Enter Project Name");
        //         $('#pname').focus();
        //         return false;
        //      }
            
        //      if($('#pname').val().length<3){
        //         alert("Project Name mast be of minnimum 3 char!");
        //         $('#pname').val('');
        //         $('#pname').focus();
        //         return false;
        //      }

        //      if($.isNumeric($('#pname').val())){
        //         alert("Project Name mast be alphanumeric!");
        //         $('#pname').val('');
        //         $('#pname').focus();
        //         return false;
        //      }

        //     //  Project Percenteg(%)
        //     if($('#pp').val()==""){
        //         alert("Please Enter Project Percenteg(%)");
        //         $('#pp').focus();
        //         return false;
        //      }

        //      if($('#pp').val().match("[A-Z]")){
        //         alert("Please Enter valid Project Percenteg(%)");
        //         $('#pp').val('');
        //         $('#pp').focus();
        //         return false;
        //      }

        //      if($('#pp').val().match("[a-z]")){
        //         alert("Invalid Project Percenteg(%)");
        //         $('#pp').val('');
        //         $('#pp').focus();
        //         return false;
        //      }

        //      if(!($('#pp').val().match("[0-9]"))){
        //         alert("Please Enter Project Percenteg(%)");
        //         $('#pp').val('');
        //         $('#pp').focus();
        //         return false;
        //      }

        //     //  if(!($('#pp').val().match("[%]"))){
        //     //     alert("Please Enter Project Percenteg(%)");
        //     //     $('#pp').focus();
        //     //     return false;
        //     //  }
            
        //     //  Percenteg color class

        //     if($('#pcc').val()==""){
        //         alert("Please Enter Percenteg color class");
        //         $('#pcc').focus();
        //         return false;
        //      }
            
        //      if($('#pcc').val().length<3){
        //         alert("Skill icon name mast be of minnimum 3 char!");
        //         $('#pcc').val('');
        //         $('#pcc').focus();
        //         return false;
        //      }

        //      if($.isNumeric($('#pcc').val())){
        //         alert("Percenteg color class Name mast be alphnumeric!");
        //         $('#pcc').val('');
        //         $('#pcc').focus();
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
                // if(isset($_GET['already_add'])){
                //     echo "<span class='text-danger'>Limit already 4 project add!</sapn>";
                // }

            ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                 <form action="" method="post" class="text-muted">

                  <div class="form-group">
                      <label for="">Project Name</label>
                      <input type="text" name="pname" class="form-control" id="pname" autofocus>
                  </div>

                  <div class="form-group">
                      <label for="">Project Percenteg(%)</label>
                      <input type="text" name="p_percenteg" class="form-control" id="pp">
                  </div>

                  <div class="form-group">
                      <label for="">percenteg color class</label>
                      <input type="text" name="p_c_class" class="form-control" id="pcc">
                  </div>
                  <button class="btn btn-outline-warning btn-block" name="btn_add" id="btn">Add Progress</button>
                  <a href="progress.php">Back</a>
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
             &copy;Copyright <?php echo date('Y'); ?> Made By CreativieWarriors
        </p>
                    
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>