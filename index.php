<?php
  if(isset($_POST['btn'])){
    $name = $_POST['na'];
    $email = $_POST['ema'];
    $massage = $_POST['mass'];

    require "admin/db/connection.php";
    
    $query = "INSERT INTO contact(name,email,massage) VALUES(?,?,?)";
    if(!($res = $mysqli->prepare($query))){
      echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
      die;
    }

    if(!($res->bind_param("sss",$name,$email,$massage))){
      echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error;
      die;
    }

    if(!$res->execute()){
      echo "Execute failed: ".$mysqli->errno.$mysqli->error;
      die;
    }

      $res->close();
      $mysqli->close();

  }
  
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="title icon" type="image/png" href="uploads/images/bs.png">
    <!-- Bootstrap CSS -->
    <!-- <link real="stylesheet" herf="./css/bootstrap.min.css"/>  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <title>pure bootstrap website</title>
    <script>
      $(document).ready(function(){
        $('#btn').click(function(){

          // name validatetion
          if($('#name').val()==""){
            // alert("Please Enter Your Name");
            $('#span_name').html('**Please Enter Your Name');
            $('#name').focus();
            return false;
          }

          if($('#name').val().length<3){
             // alert("Name mast be of minnimum 3 char!");
             $('#span_name').html('**Name mast be of minnimum 3 char!');
             $('#name').val('');
            $('#name').focus();
            return false;
          }

          if($.isNumeric($('#name').val())){
             // alert("Name mast be alphanumeric");
             $('#span_name').html('**Name mast be alphanumeric');
             $('#name').val('');
            $('#name').focus();
            return false;
          }
              // email validation
          if($('#email').val()==""){
            // alert("Please Enter Your Email Id");
            $('#span_email').html('**Please Enter Your Email Id');
            $('#email').focus();
            return false;
          }

          if($('#email').val().length<5){
            // alert("Email id Mast be 5 char!");
            $('#span_email').html('**Email id Mast be 5 char!');
            $('#email').val('');
            $('#email').focus();
            return false;
          }

          if($. isNumeric($('#email').val())){
            // alert("Email Mast be Alphanumeric");
            $('#span_email').html('**Email id Mast be Alphanumeric');
            $('#email').val('');
            $('#email').focus();
            return false;
          }

          if($('#email').val().indexOf('@')== -1){
            // alert("Missing dot(.)!");
            $('#span_email').html('**Missing (@)..');
            $('#email').val('');
            $('#email').focus();
            return false;
          }

          if($('#email').val().indexOf('.')== -1){
            // alert("Missing dot(.)!");
            $('#span_email').html('**Missing dot(.)..');
            $('#email').val('');
            $('#email').focus();
            return false;
          }

          if($('#email').val().indexOf('.')-$('#email').val().indexOf('@')<3){
            // alert("Please Enter valid Email id");
            $('#span_email').html('**Please Enter valid Email id');
            $('#email').val('');
            $('#email').focus();
            return false;
          }

          // Massage validation
          if($('#massege').val()==""){
            // alert("Please Enter Massage somethink word");
            $('#span_massege').html('**Please Enter Massage somethink word');
            $('#massege').focus();
            return false;
          }

          if($('#massege').val().length<5){
             // alert("Massege mast be of minnimum 5 char!");
             $('#span_massege').html('**massege mast be of minnimum 5 char!');
             $('#massege').val('');
            $('#massege').focus();
            return false;
          }

          if($.isNumeric($('#massege').val())){
             // alert("Massege mast be alphanumeric");
             $('#span_massege').html('**Massege mast be alphanumeric');
             $('#massege').val('');
            $('#massege').focus();
            return false;
          }

        })
      });
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
            <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#skills">skills</a></li>
            <li class="nav-item dropdown"><a class="nav-link text-light text-uppercase font-weight-bold px-3 dropdown-toggle" data-toggle="dropdown"  href="#">projects</a>
            
            <div class="dropdown-menu bg-light">
              <a class="dropdown-item" href="#project">project 1</a>
              <a class="dropdown-item" href="#project">project 2</a>
              <a class="dropdown-item" href="#project">project 3</a>
              <a class="dropdown-item" href="#project">project 4</a>
            </div>
            </li>
            <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#team">Team</a></li>
            <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#contact">contact</a></li>
            <li class="nav-item"><a href="admin/admin_login.php" class="nav-link text-light text-uppercase font-weight-bold px-3">Admin</a></li>
          </ul>
          
         <form action="" class="form-inline">
           <div class="input-group">
             <input type="text" placeholder="search..." class="form-control">
             <div class="input-group-append">
               <button type="button" class="btn">
                <i class="fas fa-search text-muted"></i>
               </button>
              </div>
           </div>
          </form>
        </div>
      </nav>

        <!-- Banner -->

        <section>
          <div class="container-fluid">
            <div class="row bg-info justify-content-center align-items-center" style="height:100vh;">
              <div class="col-sm-10 text-center">
                  <h1 class="display-2 text-capitalize">
                    <span class="text-warning">pure bootstrap</span>
                    <span class="text-white font-weight-bold">website</span>
                  </h1>
                  <h2 class="font-weight-light font-italic text-light">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  </h2>
                  <a class="btn btn-warning btn-lg px-4 m-3" href="#">Press Here</a>
                  <a class="btn btn-danger btn-lg px-4 m-3" href="#">Press Here</a>
              </div>
            </div>
          </div>
        </section>

        <!-- Skills -->
        
        <section class="bg-light p-5" id='skills'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center mb-3">
                        <h1 class="text-warning display-2">Skills</h1>
                        <p class="lead text-secondary">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sequi impedit numquam est officiis veritatis autem optio incidunt omnis!</p>
                        <a href="">Learn More</a>
                    </div>
                </div>
                <div class="row text-center">
                      <?php
                        require('admin/db/connection.php');
                        $res = $mysqli->query("SELECT * FROM skill");
                        while($row = $res->fetch_assoc()){
                      ?>
                    <div class="col-lg-4 col-sm-12 max-auto mb-5">
                        <i class="fas fa-<?php echo $row['skill_icon_name']?> fa-6x text-warning mb-3"></i>
                        <h1 class="text-secondary"><?php echo $row['skill_name']?></h1>
                        <p class="text-muted my-4"><?php echo $row['description']?></p>
                        <a href="#" class="btn btn-outline-warning" id="project">Lorem More</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- Project Section -->
                <div class="row">
                    <div class="col text-center mb-3">
                        <h1 class="text-warning display-2">Projects</h1>
                        <p class="lead text-secondary">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sequi impedit numquam est officiis veritatis autem optio incidunt omnis!</p>
                    </div>
                </div>

                <div class="row text-center">
                <?php
                  $res1 = $mysqli->query("SELECT * FROM project");
                  while($row = $res1->fetch_assoc()){ 
                    
                ?>
                    <div class="col-lg-3">
                      <img src="uploads/images/<?php echo $row['thumbnail_name']?>" class="img-thumbnail"/>
                      <h2 class="my-3 text-warning"><?php echo $row['project_name']?></h2>
                      <p class="text-muted"><?php echo $row['description']?></p>
                    </div>
                <?php
                  }
                ?>
                </div>
            </div>
        </section>
        <!-- Team -->
        <section class="p-2 p-sm-5 bg-secondary" id="team">
          <div class="container-fluid">
            <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="text-warning display-2">Team</h1>
                    <p class="lead text-light">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sequi impedit numquam est officiis veritatis autem optio incidunt omnis!</p>
                </div>
              </div>
          </div>

          <div class="container-fluid">
            <div class="row">

              <?php
                $res2  = $mysqli->query("SELECT * FROM team");
                while($row= $res2->fetch_assoc()){
              ?>

              <div class="col-lg-4">
                <div class="card">
                  <img src="uploads/images/<?php echo $row['team_thumbnail_name']?>" class="card-rounded-top">
                  <div class="card-body">
                    <div class="card-title">
                      <h3 class="text-muted"><?php echo $row['name']?></h3>
                    </div>
                      <div class="card-subtitle">
                        <p class="lead text-secondary"><?php echo $row['description']?></p>
                      </div>
                      <div class="text-right">
                        <a href="<?php echo $row['facebook_url'] ?>">
                          <i class="fab fa-facebook fa-2x my-2 text-primary"></i>
                        </a>
                        <a href="<?php echo $row['twitter_url']?>">
                          <i class="fab fa-twitter fa-2x my-2 text-info"></i>
                        </a>
                        <a href="<?php echo $row['youtube_url']?>">
                          <i class="fab fa-youtube fa-2x my-2 text-danger"></i>
                        </a>
                      </div>
                  </div>
                </div>
              </div>

              <?php
              }
              ?>

              
            </div>
          </div>
        </section>

        <!-- Progress -->

        <section class="p-5">
          <div class="container-fluid">
              <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="text-warning display-2">Progress</h1>
                    <p class="lead text-secondary">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sequi impedit numquam est officiis veritatis autem optio incidunt omnis!
                    </p>
                </div>
              </div>
              <div class="row justify-content-center">
                 <div class="col-lg-6 text-secondary">

                  <?php
                  $res3 = $mysqli->query("SELECT * FROM progress");
                  while($row= $res3->fetch_assoc()){

                  ?>

                    <h2><?php echo $row['project_name']?></h2>
                    <div class="progress bg-secondary mb-3">
                        <div class="progress-bar <?php echo $row['percenteg_color_class']?>" style="width:<?php echo $row['project_percenteg']?>%">
                        <?php echo $row['project_percenteg']?>%
                        </div>
                    </div>
                    
                  <?php
                  }
                  ?>  

                    
                 </div>
              </div>
          </div>
        </section>

        
        <!-- Contact -->

        <section class="p-5 bg-light" id="contact">
          <div class="container-fluid">
             <div class="row">
                <div class="col text-center mb-3">
                   <h1 class="text-warning display-2">Contact Us</h1>
                      <p class="lead text-secondary">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sequi impedit numquam est officiis veritatis autem optio incidunt omnis!
                      </p>
                </div> 
             </div>

             <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 ">
                    <div class="text-center text-secondary">
                        <h2>Got Question</h2>
                        <p>Stay Connected</p>
                    </div> 
                    <form class="text-muted" action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="na">
                            <span id="span_name" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="ema">
                            <span id="span_email" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="massage">Massege</label>
                            <textarea class="form-control" rows="3" id="massege" name="mass"></textarea>
                            <span id="span_massege" class="text-danger"></span>
                        </div>

                        <button class="btn btn-outline-warning btn-block" name="btn" id="btn">Submit Question</button>
                    </form>
                </div>
             </div>
          </div>
        </section>

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