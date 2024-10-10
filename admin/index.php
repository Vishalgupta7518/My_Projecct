<?php
require('functions/functions.php');
deleteSkill();
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
    <script src="js/scripts.js"></script>
    <title>Skill</title>
    <script>
       confirmDeletion();
    </script>
  </head>
  <body>
  <div class="container-fluid">
          <?php
            include('include.php');
          ?>
    <div class="row">

      <?php
            include('sidebar_include.php');
      ?>


        <div class="col-lg-10 ">
         <div class="container-fluid p-5">

              <div class="float-right">
                <form action="" method="post" class="d-flex form-inline">
                  <div class="input-group">
                    <input type="search" name="search" class="form-control " placeholder="Search..." autofocus>
                      <div class="input-group-append">
                        <button class="btn" name="search_btn"><i class="fas fa-search text-primary"></i></button>
                      </div>
                  </div>
                </form>
              </div>
             
          <table class="mb-3 table table-bordered table-striped text-center">
            <h1 class="my-3 text-center"><b>Skill</b></h1>
            <?php
            addSkill();
            ?>
            
            <thead class="table-dark">
            <tr>
                <th>Sr.n</th>
                <th>Skill Name</th>
                <th>Description</th>
                <th>Skill icon</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
               displaySkills();
            ?>
            </tbody> 
          </table>
         </div>  
        </div>

    </div>
  <div>
    
    <!-- Footer -->
            
    <!-- <footer class="bg-secondary fixed-bottom">
        <p class="text-light py-4 m-0" align="center">
             &copy;Copyright 2021 Made By CreativieWarriors
        </p>
                    
    </footer> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>