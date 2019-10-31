<!DOCTYPE html>
 <html>
 <head>
      <title>TASSIA SCHOOL |</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<style media="screen">
.logo{
  width: 120px;
  height: 80px;
  float: left;
}
.links{
 margin-top: -40px;
 float: right;
}

.links a{
  color: #050505;
  text-align: center;
  padding:16px;
  text-decoration: none;
  font-size: 22px;
  padding-top: 20px
}
body{
  background-image: url('<?php echo base_url()?>images/back-g.PNG');
  background-size: contain;
  background-repeat: no-repeat;
}

form{
    align-items: center;
    align-self: center;
     width: 500px;
     text-align: center;
   }
.heading{
  padding-left: 50px;
}
   h2{
     text-align: center;
     font-family: serif;
     text-decoration-style: wavy;
   }
   .editF{
     opacity: 0.9;

     width: 600px;
     margin: 275px;
     margin-top: 0px;
   }
   nav{
     border: 6px solid;
     background-color: #840606;
   }
   nav h1{
     text-align: center;
    color:#D0CFCF;
   }
   nav a{

   }
</style>


 </head>
 <nav class="navbar">
  <img class="logo "src="<?php echo base_url();?>images/tassia.jpeg" alt="LOGO">
   <div class="heading">
    <h1>School Academics System</h1>
  </div>

<div class="links">
    <a href="https://tassiaschool.co.ke/">Visit Website</a>
</div>


 </nav>
 <body>
      <div class="container">
           <br /><br /><br />

<div class="editF">
           <div class="jumbotron">
           <form method="post" action="reg">
             <h2 class="">REGISTER</h2>
                <div class="form-group">
                     <label>Userame</label>
                     <input type="text" name="username" class="form-control" />
                     <span class="text-danger"></span>
                </div>
                <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" />
                     <span class="text-danger"></span>
                </div>
                <div class="form-group">
                     <label>UserType</label>
                     <select class="" name="usertype">
                       <option value="ADMIN">Administrator</option>
                       <option value="TEACHER">Teacher</option>
                     </select>
                     <span class="text-danger"></span>
                </div>
                <div class="form-group">
                  <input type="submit" name="register" value="register">
                  <p>Already a member? <a href="login">Login here</a> </p>
                  <!--   <input type="submit" name="insert" value="Login" class="btn btn-info" />-->
                     <?php
                  //echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';
                  ?>
                  </div>
           </form>
        </div>
         </div>
      </div>
 </body>
 </html>
