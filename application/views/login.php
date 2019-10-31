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
  background-size: cover;
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
  <img class="logo" src="<?php echo base_url();?>images/tassia.jpeg" alt="LOGO">
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
  <h3>Login</h3>
<?php if (isset($_SESSION['success'])) {?>
<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
<?php
  }?>
<?php echo validation_errors('<div class ="alert alert-danger">', '</div'); ?>
<form action="verify" method="POST">
<div class="form-group">
 <label for="username">Username</label>
 <input class="form-control" name="username"  type="text">
</div>
<div class="form-group">
 <label for="password">Password</label>
 <input class="form-control" name="password" id="password" type="password">
</div>
<div>
 <input type="submit" name="submit" value="Login">
</div>
</form>
</div>
         </div>
      </div>
 </body>
 <script src="<?php echo base_url(); ?> assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </html>
