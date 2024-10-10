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
    <title>File upload Form</title>
    <style>
        .file{
            color:blue;
            margin-right: 100px;
        }
        #sub{
            margin-right: 100px;  
        }
        #back{
            margin-right: 100px;  
        }
    </style>
    <script>
        function validateForm(){
            var file_ctrl = document.getElementById("selectfile").value;
            if(file_ctrl ==""){
                alert("Please Select A File For Upload First!");
                document.getElementById("selectfile").focus();
                return false;
            }
        }
    </script>
</head>
<body>
        <!-- Nav -->
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
      
      <a href="#"class="navbar-brand"><i class="fas fa-child text-warning fa-2x"></i></a>
      <button type="button" class="navbar-toggler bg-light"data-toggle="collapse" data-target="#nav">
       <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nav">
         <ul class="navbar-nav">
           <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Dashboard</a></li>
           <li class="nav-item"><a href="../index.php" class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Logout</a></li>
         </ul>
      </div>
  </nav>

     <?php
        if(isset($_GET["error_file_exists"])){
            echo "<span style=color:red;font-weight:bold>File Already Exists!</span>";
        }

        if(isset($_GET["success_uploaded"])){
            echo "<span style=color:green;font-weight:bold>File Uploaded Successfully!</span>";
        }

        if(isset($_GET["missing_file"])){
            echo "<span style=color:red;font-weight:bold>Please Select File First!</span>";
        }

        if(isset($_GET["invalid_formet"])){
            echo "<span style=color:red;font-weight:bold>Please select a valid file formet!</span>";
        }

        if(isset($_GET["file_size_exeeded"])){
            echo "<span style=color:red;font-weight:bold>File size exceds maximum size limit (5MB)</span>";
        }

     ?>

    <section class="mt-3">
     <form action="file_process.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" align="center">
        <h2 class="file">Upload File</h2><hr/>
        <label for='selectfile'><b style=color:red; >File Name:</b></label>
        <input type="file" name='myfile' id= 'selectfile'>
        <br/><br/>
        <input type="submit" value="Upload" name="submit" class="btn btn-primary" id="sub">
        <br/><br/>
        <a href="index.php" id="back" class="text-danger">Back</a>
        <p style=color:blue;><b style=color:red; >Note:</b> Only .jpg, .jepg, .png, .gif type files with maximum 5 MB size can be uploaded.</p>
     </form>
    </section>

     <footer class="bg-secondary fixed-bottom">
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