<?php
 require('db/connection.php');
//  project.php
  function deleteProject(){

    session_start();
    global $mysqli;
   
    if(!isset($_SESSION['user'])){
        echo "<script>window.location='admin_login.php'</script>";
    }
    
    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
       
        $query = "DELETE FROM project WHERE id=?";

        if(!($stmt = $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("i",$id))){
            echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error; 
        }

        if(!$stmt->execute()){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error; 
        }

        $stmt->close();
        // $mysqli->close();
    }
  }


  function displayProjects(){
    global $mysqli;
    if(isset($_POST['search_btn'])){
        $search = $_POST['search'];
        $query = "SELECT *FROM project WHERE id LIKE '%$search%' or project_name LIKE '%$search%' or description LIKE '%$search%' or thumbnail_name LIKE '%$search%'";
    }else{
        $query = "SELECT * FROM project";
    }
    $res = $mysqli->query($query);
    if($res->num_rows>0){
     $a=1;
     while($row = $res->fetch_assoc()){
      echo '<tr>
        <th>'.$a++.'</th>
        <td>'.$row['project_name'].'</td>
        <td>'.$row['description'].'</td>
        <td><img src="../uploads/images/'.$row['thumbnail_name'].'" width="50px" height="33px" alt="image missing" class="mx-3 img-thumbnail"></td>
        <td><a href="edit_project.php?id='.$row['id'].'"><i class="fas fa-edit fa-2x text-primary mx-3"></i></a> </td>
        <td><a href="project.php?delid='.$row['id'].'"><i class="fas fa-trash fa-2x text-danger mx-3 trash-btn"></i></a> </td>
        </tr>';
      }
    }else{
        echo '<tr>
                <th class="text-danger" colspan="6">Record Not Found</th>    
            </tr>';
    }  
  }

  function addProject(){
    if($_SESSION['user']=='admin'){
              echo '<a href="add_project.php" class="btn btn-dark mb-2">Add project</a>';
    }
            
  }

  // skill.php
 function deleteSkill(){
   
  session_start();
  global $mysqli;
  if(!isset($_SESSION['user'])){
      echo "<script>window.location='admin_login.php'</script>";
  }

  if(isset($_GET['delid'])){
    $id = $_GET['delid'];
    
    $query = "DELETE FROM skill WHERE id=?";
    if(!($stmt = $mysqli->prepare($query))){
        echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
    }

    if(!($stmt->bind_param("i",$id))){
        echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error; 
    }

    if(!$stmt->execute()){
      echo "Execution failed: ".$mysqli->errno.$mysqli->error; 
    }

    $stmt->close();
    // $mysqli->close();
  }
 }

 function addSkill(){
  if($_SESSION['user']=='admin'){
    echo '<a href="add_skill.php" class="btn btn-dark mb-2">Add skill</a>';
  }
 }

function displaySkills(){
  global $mysqli;
  if(isset($_POST['search_btn'])){
    $search = $_POST['search'];
    
    
    $query = "SELECT *FROM skill WHERE id LIKE '%$search%' or skill_name LIKE '%$search%' or description LIKE '%$search%' or skill_icon_name LIKE '%$search%'";
   }else{
    $query = "SELECT *FROM skill";
   }
   
   $res = $mysqli->query($query);
   
   if($res->num_rows>0){
     $i=1;
    while($row=$res->fetch_assoc()){
  
  ?>
    <tr>
    <th><?php echo $i++?></th>
    <td><?php echo $row['skill_name']?></td>
    <td><?php echo $row['description']?></td>
    <td><a href="#"><i class="fas fa-<?php echo $row['skill_icon_name']?> fa-2x text-warning mx-3"></i></a></td>
    <td><a href="edit_skill.php?id=<?php echo $row['id']?>"><i class="fas fa-edit fa-2x text-primary mx-3"></i></a> </td>
    <td><a href="index.php?delid=<?php echo $row['id']?>"><i class="fas fa-trash fa-2x text-danger mx-3 trash-btn"></i></a> </td>  
    </tr>
  <?php
    }
  }else{
         echo "<tr>
               <th class='text-danger' colspan=6>Record Not Found</th>
               </tr>";
    }

  
}

    

//  progress.php
function deleteProgress(){
  global $mysqli;
  session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>window.location='admin_login.php'</script>";
    }

    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
        
        $query = "DELETE FROM progress WHERE id=?";

        if(!($stmt = $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("i",$id))){
            echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error; 
        }

        if(!$stmt->execute()){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error; 
        }

        $stmt->close();
        // $mysqli->close();
    }

}

function addProgress(){
  if($_SESSION['user']=='admin'){
    echo '<a href="add_progress.php" class="btn btn-dark mb-2">Add progress</a>';
  }
}

function displayProgress(){
  global $mysqli;
  if(isset($_POST['search_btn'])){
      $search = $_POST['search'];
      $query="SELECT *FROM progress WHERE id LIKE '%$search%' or project_name LIKE '%$search%' or project_percenteg LIKE '%$search%' or percenteg_color_class LIKE '%$search%'";
  
  }else{
      $query="SELECT * from progress";
  }
  
  $res = $mysqli->query($query);
 if($res->num_rows>0){  
  $c = 1;
  while($rows = $res->fetch_assoc()){
  echo '<tr>
      <th>'.$c++.'</th>
      <td>'.$rows['project_name'].'</td>
      <td><span class="mx-5">'.$rows['project_percenteg'].'</span></td>
      <td><span class="mx-5">'.$rows['percenteg_color_class'].'</span</td>   
      <td><a href="edit_progress.php?id='.$rows['id'].'"><i class="fas fa-edit fa-2x text-primary mx-3"></i></a> </td>
      <td><a href="progress.php?delid='.$rows['id'].'"><i class="fas fa-trash fa-2x text-danger mx-3 trash-btn"></i></a> </td>
      </tr>';
  }

  }else{
      echo '<tr><th class="text-danger" colspan="6">Record Not Found</th></tr>';
   }
}


// team.php
function deleteTeam(){
  global $mysqli;
  session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>window.location='admin_login.php'</script>";
    }

    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
        
        $query = "DELETE FROM team WHERE id=?";

        if(!($stmt = $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("i",$id))){
            echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error; 
        }

        if(!$stmt->execute()){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error; 
        }

        $stmt->close();
        // $mysqli->close();
    }
}

function addTeam(){
  if($_SESSION['user']=='admin'){
    echo '<a href="add_team.php" class="btn btn-dark mb-2">Add team</a>';
  }
}

function displayTeam(){
  global $mysqli;
  if(isset($_POST['search_btn'])){
      $search = $_POST['search'];
      $query="SELECT * FROM team WHERE id LIKE '%$search%' or name LIKE '%$search%' or description LIKE '%$search%'";
  
  }else{
      $query="SELECT * from team";
  }
  $res = $mysqli->query($query);
  if($res->num_rows>0){
    $b= 1;
    while( $rows = $res->fetch_assoc()){
      echo ' <tr>
      <th>'.$b++.'</th>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['description'].'</td>
      <td>'.$rows['facebook_url'].'</td>
      <td>'.$rows['twitter_url'].'</td>
      <td>'.$rows['youtube_url'].'</td>
      <td><img src="../uploads/images/'.$rows['team_thumbnail_name'].'" width="50px" height="33px" alt="image missing" class="mx-3 img-thumbnail"></td>
      <td><a href="edit_team.php?id='.$rows['id'].'"><i class="fas fa-edit fa-2x text-primary mx-3"></i></a> </td>
      <td><a href="team.php?delid='.$rows['id'].'"><i class="fas fa-trash fa-2x text-danger mx-3 trash-btn"></i></a> </td>
      </tr>';
    }
  }else{
      echo '<tr><th class="text-danger" colspan="9">Record Not Found </th></tr>';
  }
}

// Contact.php
function deleteContact(){
  global $mysqli;
  session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>window.location='admin_login.php'</script>";
    }

    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
        
        $query = "DELETE FROM contact WHERE id=?";

        if(!($stmt = $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("i",$id))){
            echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error; 
        }

        if(!$stmt->execute()){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error; 
        }

        $stmt->close();
        // $mysqli->close();
    }
}

function displayContact(){
  global $mysqli;
  if(isset($_POST['search_btn'])){
     $search = $_POST['search'];
     $query="SELECT *FROM contact WHERE id LIKE '%$search%' or name LIKE '%$search%' or email LIKE '%$search%' or massage LIKE '%$search%'";
  
 }else{
     $query="SELECT * from contact";
 }

  $res = $mysqli->query($query);
   
 if($res->num_rows>0){
   $d=1;
   while($rows = $res->fetch_assoc()){
     echo '<tr>
     <th>'.$d++.'</th>
     <td>'.$rows['name'].'</td>
     <td>'.$rows['email'].'</td>
     <td>'.$rows['massage'].'</td>
     <td><a href="contact.php?delid='.$rows['id'].'"><i class="fas fa-trash fa-2x text-danger mx-3 trash-btn"></i></a> </td>
     </tr>';
   }

 }else{
     echo "<tr>
           <th class='text-danger' colspan='5'>Record not found</th>
           </tr>";
     }
}

// add_progress.php

function add(){
  global $mysqli;
      session_start();
      if(!isset($_SESSION['user'])){
     echo "<script>window.location='admin_login.php'</script>"; 
      }

    if(isset($_POST['btn_add'])){
      
      $query1 = "SELECT *FROM progress";
      $res = $mysqli->query($query1);

    if($res->num_rows<4){

      $project_name=$_POST['pname'];
      $project_percenteg=$_POST['p_percenteg'];
      $percenteg_color_class=$_POST['p_c_class'];
 


    $query = "INSERT INTO progress(project_name,project_percenteg,percenteg_color_class) VALUES(?,?,?)";

    if(!($stmt= $mysqli->prepare($query))){
      echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
      die;
    }

    if(!($stmt->bind_param("sis",$project_name,$project_percenteg,$percenteg_color_class))){
      echo "Biniding parameter failed: ".$mysqli->errno.$mysqli->error;
      die;
    }

    if(!$stmt->execute()){
      echo "Execution failed: ".$mysqli->errno.$mysqli->error;
      die;
    }

    $stmt->close();
    // $mysqli->close();

    echo "<script>window.location='progress.php'</script>";
    }else{
      echo "<script>alert('Limit already 4 project add!')</script>"; 
      // echo "<script>window.location='add_progress.php?already_add'</script>"; 
    }
    }

} 

// add_project.php
function addPro(){
  global $mysqli;
  session_start();
    if(!isset($_SESSION['user'])){
       echo "<script>window.location='admin_login.php'</script>"; 
    }

 if(isset($_POST['btn_add'])){
   

    $query1 = "SELECT *FROM project";
    $res = $mysqli->query($query1);
    
  if($res->num_rows<4){
    
    $project_name= $_POST['pname'];
    $description= $_POST['des'];
    $thumbnail_name= $_FILES['file']['name'];   

    

    $query = "INSERT INTO project(project_name,description,thumbnail_name) VALUES(?,?,?)";
    
    if(!($stmt= $mysqli->prepare($query))){
        echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        die;
    }

    if(!($stmt->bind_param("sss",$project_name,$description,$thumbnail_name))){
        echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error;
        die;
    }

    if(!$stmt->execute()){
        echo "Execution failed: ".$mysqli->errno.$mysqli->error;
        die;
    }

    $stmt->close();
    // $mysqli->close();

    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

        $filename = $_FILES['file']['name'];
        $filetmpname = $_FILES['file']['tmp_name'];
        
        if(move_uploaded_file($filetmpname,"../uploads/images/".$filename)){
               
        }else{
                echo "There was an error uploading file!";
                die;
             }
    }

    echo "<script>window.location='project.php'</script>";
  }else{
    // echo "<script>window.location='add_project.php?already_add'</script>";
    echo "<script>alert('Limit already 4 project add!')</script>";
  }
 }
}

// add_skill.php
function addS(){
  global $mysqli;
  session_start();
    if(!isset($_SESSION['user'])){
       echo "<script>window.location='admin_login.php'</script>"; 
    }

 if(isset($_POST['btn_add_skill'])){
  
  
  $query1 = "SELECT * FROM skill";
  $res = $mysqli->query($query1);

  if($res->num_rows<3){

    $skill_name=$_POST['sname'];
    $description=$_POST['des'];
    $skill_icon_name=$_POST['iname'];

    $query = "INSERT INTO skill(skill_name,description,skill_icon_name) VALUES(?,?,?)";

     if(!($stmt= $mysqli->prepare($query))){
        echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        die;
     }
 
     if(!($stmt->bind_param("sss",$skill_name,$description,$skill_icon_name))){
        echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error;
        die;
     }

     if(!$stmt->execute()){
        echo "Execution failed: ".$mysqli->errno.$mysqli->error;
        die;
     }
 
     $stmt->close();
     $mysqli->close();

     echo "<script>window.location='index.php'</script>";
    
  }else{
      // echo "<script>window.location='add_skill.php?already_exist'</script>";
      echo "<script>alert('Limit already 3 skill add!')</script>";
    }
 }

}

// add_team.php
function addTea(){
  global $mysqli;
  session_start();
    if(!isset($_SESSION['user'])){
       echo "<script>window.location='admin_login.php'</script>"; 
    }

    if(isset($_POST['btn_add'])){
        
        $query1 = "SELECT *FROM team";
        $res = $mysqli->query($query1);

    if($res->num_rows<3){  

        $name=$_POST['name'];
        $description=$_POST['des'];
        $f_url=$_POST['f_url'];
        $t_url=$_POST['t_url'];
        $y_url=$_POST['y_url'];
        $t_t_name=$_FILES['file']['name'];
    
    $query = "INSERT INTO team(name,description,facebook_url,twitter_url,youtube_url,team_thumbnail_name) VALUES(?,?,?,?,?,?)";
   
    if(!($stmt= $mysqli->prepare($query))){
        echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        die;
    }

    if(!($stmt->bind_param("ssssss",$name,$description,$f_url,$t_url,$y_url,$t_t_name))){
        echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error;
        die;
    }

    if(!$stmt->execute()){
        echo "Execution failed: ".$mysqli->errno.$mysli->error;
        die;
    }

    $stmt->close();
    $mysqli->close();

    if(isset($_FILES['file']) && $_FILES['file']['error']==0){
        $filename = $_FILES['file']['name'];
        $tmpfilename = $_FILES['file']['tmp_name'];

        if(move_uploaded_file($tmpfilename,"../uploads/images/".$filename)){

        }else{
            echo "There was an error uploaded file!";
            die;
        }
    }

    echo "<script>window.location='team.php'</script>";
 }else{
    echo "<script>alert('Limit Already 3 team add!')</script>";
    // echo "<script>window.location='add_team.php?already_add'</script>";
 }
 }

}

// edit_progress.php
function editProgress(){
  global $mysqli;
  global $row;
  session_start();
    if(!isset($_SESSION['user'])){
       echo "<script>window.location='admin_login.php'</script>"; 
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        

        $res = $mysqli->query("SELECT *FROM progress WHERE id=$id");
        if($res->num_rows>0){
            $row = $res->fetch_assoc();
        }
    }

    if(isset($_POST['btn'])){
        
        $id = $_POST['id'];
        $pname = $_POST['pname'];
        $ppercenteg = $_POST['ppercenteg'];
        $pcclass = $_POST['pcclass'];

        $query = "UPDATE progress SET project_name=?,project_percenteg=?,percenteg_color_class=? WHERE id=?";
        
        if(!($stmt = $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("sisi",$pname,$ppercenteg,$pcclass,$id))){
            echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!$stmt->execute()){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error;
        }

        $stmt->close();
        // $mysqli->close();
         
        echo "<script>window.location='progress.php'</script>";

    }

}

// edit_project.php
function editProject(){
  global $mysqli;
  global $row;
  session_start();
    if(!isset($_SESSION['user'])){
       echo "<script>window.location='admin_login.php'</script>"; 
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $query = "SELECT *FROM project WHERE id=$id";
        $res = $mysqli->query($query);

        if($res->num_rows>0){
            $row = $res->fetch_assoc();
        }
    }

    if(isset($_POST['btnn'])){

        $id = $_POST['id'];
        $pname = $_POST['pname'];
        $desc = $_POST['desc'];
        $filename = $_FILES['file']['name'];

        
        $query = "UPDATE project SET project_name=?,description=?,thumbnail_name=? WHERE id=?";
        
        if(!($stmt = $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("sssi",$pname,$desc,$filename,$id))){
            echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!$stmt->execute()){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error;
        }

        $stmt->close();
        // $mysqli->close();

        if(isset($_FILES['file']) && $_FILES['file']['error']==0){
            
            $filetmpname = $_FILES['file']['tmp_name'];
            
            if(move_uploaded_file($filetmpname,"../uploads/images/".$filename)){
               
            }else{
                    echo "There was an error uploading file!";
                    die;
                 }

        }
         
        echo "<script>window.location='project.php'</script>";

    
    }
}

// edit_skill.php
function editSkill(){
  global $mysqli;
  global $row;
  session_start();
  if(!isset($_SESSION['user'])){
     echo "<script>window.location='admin_login.php'</script>"; 
  }

 if(isset($_GET['id'])){
  $id=$_GET['id'];
  

  $res = $mysqli->query("Select *from skill where id=$id");

  if($res->num_rows>0){
      $row = $res->fetch_assoc();
  }
  
 }

 if(isset($_POST['btn'])){
  $id=$_POST['sid'];
  $sname = $_POST['sname'];
  $sdesc = $_POST['sdesc'];
  $sicon = $_POST['sicon'];
  
  $query = "UPDATE skill set skill_name=?,description=?,skill_icon_name=? where id=?";
  
  if(!($stmt = $mysqli->prepare($query))){
      echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
  }

  if(!($stmt->bind_param("sssi",$sname,$sdesc,$sicon,$id))){
      echo "Binding Parameter failed: ".$mysqli->errno.$mysqli->error;
  }

  if(!$stmt->execute()){
      echo "Execution failed: ".$mysqli->errno.$mysqli->error;
  }

  $stmt->close();
  // $mysqli->close();

  echo "<script>window.location='index.php'</script>";
 
  
 }
}

// edit_team.php
function editTeam(){
  global $mysqli;
  global $row;
  session_start();
    if(!isset($_SESSION['user'])){
       echo "<script>window.location='admin_login.php'</script>"; 
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $query = "SELECT *FROM team WHERE id=$id";

        $res = $mysqli->query($query);

        if($res->num_rows>0){
            $row = $res->fetch_assoc();
        }
        
    }

    if(isset($_POST['btnn'])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $filename = $_FILES['file']['name'];
        $facebook = $_POST['face'];
        $twitter = $_POST['twi'];
        $youtube = $_POST['you'];
        $id = $_POST['id'];

        $query = "UPDATE team SET name=?,description=?,facebook_url=?,twitter_url=?,youtube_url=?,team_thumbnail_name=? WHERE id=?";
        if(!($stmt= $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("ssssssi",$name,$desc,$facebook,$twitter,$youtube,$filename,$id))){
            echo "Binding Parameter failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!$stmt->execute()){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error;
        }

        $stmt->close();
        // $mysqli->close();

        if(isset($_FILES['file']) && $_FILES['file']['error']==0){
            $filetmpname = $_FILES['file']['tmp_name'];

            if(move_uploaded_file($filetmpname,"../uploads/images/".$filename)){
               
            }else{
                    echo "There was an error uploading file!";
                    die;
                 }
        }

        echo "<script>window.location='team.php'</script>";
    }

}

// admin_login.php
function adminlogin(){
  global $mysqli;
  if(isset($_POST['btnn'])){
    $username = $_POST['usern'];
    $password = $_POST['pass'];
    // $password = md5($_POST['pass']);
       
    $query = "SELECT * FROM admin WHERE user_name='$username'";
    
    $stmt = $mysqli->query($query);

    if($stmt->num_rows>0){

        // while(){
        $rows=$stmt->fetch_assoc();  
        
        // $password==$rows['password']
        // decrypt db pass
        if(password_verify($password,$rows['password'])){
          session_start();

          $_SESSION['user'] = $rows['user_name'];
          $_SESSION['pass'] = $rows['password'];
         
          echo "<script>window.location='index.php'</script>";

        }else{
          echo "<script>window.location='admin_login.php?invalid_pass'</script>";  
        }
        
        //}

    }else{
        //echo "<script>alert('Invalid username and password')</script>";
        echo "<script>window.location='admin_login.php?invalid_user'</script>";
    }

    // $row = $stmt->fetch_assoc();

    //  $row['user_name'];
    //  $row['password'];

    // if($username==$row['user_name'] && $password==$row['password']){
    //     echo "<script>window.location='index.php'</script>";
    // }
    // else{
    //     echo "<script>alert('Invalid username and password')</script>";
    //     // echo "<script>window.location='admin_login.php?invalid_user'</script>";
    // }
  }
}

// register_page.php
function registerpage(){
  global $mysqli;
  if(isset($_POST['btnn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $pass = password_hash($password,PASSWORD_DEFAULT);
    // $pass = md5($password);
    
    //Checking exisiting user

    //Select *from admin where username==$username
    //if numrw>0 => user exists
    //else Insert into admin (username, password) values($username, $password) 
    $query1 = "SELECT *FROM admin WHERE user_name= '$username'";
    $res = $mysqli->query($query1);
    
    if($res->num_rows>0){
        echo "<script>alert('Already user exists')</script>";
    }else{
        $query = "INSERT INTO admin(user_name,password) VALUES(?,?)";
        if(!($stmt = $mysqli->prepare($query))){
            echo "Prepare failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->bind_param("ss",$username,$pass))){
            echo "Binding parameter failed: ".$mysqli->errno.$mysqli->error;
        }

        if(!($stmt->execute())){
            echo "Execution failed: ".$mysqli->errno.$mysqli->error;
        }
        $stmt->close();
        // $mysqli->close();
        echo "<script>window.location='admin_login.php'</script>";
      }
  }
        
}

 
 
?>