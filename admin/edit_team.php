<?php
    require('functions/functions.php');
    editTeam();
    global $row;


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
    <title>Edit Team</title>
    <script>
        editteamVal();
        // $(document).ready(function(){
        //     $('#btn').click(function(){

        //      if($('#name').val()==""){
        //         alert("Please Enter Name");
        //         $('#name').focus();
        //         return false;
        //      }
            
        //      if($('#name').val().length<3){
        //         alert("Name mast be of minnimum 3 char!");
        //         $('#name').val('');
        //         $('#name').focus();
        //         return false;
        //      }

        //      if($.isNumeric($('#name').val())){
        //         alert("Name mast be alphnumeric!");
        //         $('#name').val('');
        //         $('#name').focus();
        //         return false;
        //      }

        //     //  Description
        //     if($('#des').val()==""){
        //         alert("Please Enter Description somethink word");
        //         $('#des').focus();
        //         return false;
        //      }
            
        //      if($('#des').val().length<10){
        //         alert("Description mast be of minnimum 10 char!");
        //         $('#des').val('');
        //         $('#des').focus();
        //         return false;
        //      }

        //      if($.isNumeric($('#des').val())){
        //         alert("Description mast be alphnumeric!");
        //         $('#des').val('');
        //         $('#des').focus();
        //         return false;
        //      }
        //     //  Project image Thumbnail

        //     // if($('#pit').val()==""){
        //     //     alert("Please Select Project image Thumbnail");
        //     //     $('#pit').focus();
        //     //     return false;
        //     //  }

        //      // Upload team image 
            
        //      if($('#uti').val()==""){
        //         alert("Please Select Upload Team image");
        //         $('#uti').val('');
        //         $('#uti').focus();
        //         return false;
        //      }
        //     //  facebook
        //     if($('#facebook').val()==""){
        //         alert("Please Enter Facebook URL");
        //         $('#facebook').focus();
        //         return false;
        //     }

        //     if($('#facebook').val().length<5){
        //         alert("facebook url mast be of minnimum 5 char!")
        //         $('#facebook').val('');
        //         $('#facebook').focus();
        //         return false;
        //     }

        //     if($.isNumeric($('#facebook').val())){
        //         alert("facebook url mast be alphnumeric!");
        //         $('#facebook').val('');
        //         $('#facebook').focus();
        //         return false;
        //      }

        //       //  twitter
        //     if($('#twitter').val()==""){
        //         alert("Please Enter twitter URL");
        //         $('#twitter').focus();
        //         return false;
        //     }

        //     if($('#twitter').val().length<5){
        //         alert("twitter url mast be of minnimum 5 char!")
        //         $('#twitter').val('');
        //         $('#twitter').focus();
        //         return false;
        //     }

        //     if($.isNumeric($('#twitter').val())){
        //         alert("twitter url mast be alphnumeric!");
        //         $('#twitter').val('');
        //         $('#twitter').focus();
        //         return false;
        //      }

        //        //  youtube

        //     if($('#ytube').val()==""){
        //         alert("Please Enter youtube URL");
        //         $('#ytube').focus();
        //         return false;
        //     }

        //     if($('#ytube').val().length<5){
        //         alert("youtube url mast be of minnimum 5 char!")
        //         $('#ytube').val('');
        //         $('#ytube').focus();
        //         return false;
        //     }

        //     if($.isNumeric($('#ytube').val())){
        //         alert("youtube url mast be alphnumeric!");
        //         $('#ytube').val('');
        //         $('#ytube').focus();
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
          <form action="" method="post" enctype="multipart/form-data">
          <table align="center" class="my-5">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" id="name" autofocus></td>
            </tr>
            <tr>
                <th>Description:</th>
                <td><textarea cols="30" name="desc" rows="5" class="form-control" id="des"><?php echo $row['description']?></textarea></td>
            </tr>
            <tr>
                <th>Project image Thumbnail: </th>
                <td><img src="../uploads/images/<?php echo $row['team_thumbnail_name']?>" width="40px" height="30px" alt="image missing" class="mx-3 img-thumbnail" id="pit"></td>
            </tr>
            <tr>
                <th>Upload Team image: </th>
                <td><input name="file" type="file" id="uti"></td>
            </tr>
            <tr>
                <th>Facebook: </th>
                <td><input type="text" name="face" value="<?php echo $row['facebook_url']?>" class="form-control" id="facebook"></td>
            </tr>
            <tr>
                <th>Twitter: </th>
                <td><input type="text" name="twi"  value="<?php echo $row['twitter_url']?>" class="form-control" id="twitter"></td>
            </tr>
            <tr>
                <th>Youtube: </th>
                <td><input type="text" name="you" value="<?php echo $row['youtube_url']?>" class="form-control" id="ytube"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnn" value="submit" class="btn btn-primary" id="btn"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $row['id']?>"></td>
                <td><a href="team.php" class="text-danger">Back</a></td>
            </tr>
           </table>
           </form>
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