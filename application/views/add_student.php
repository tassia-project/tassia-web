
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Manage Student</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
          }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .logo{
        height: 100px;
        width: 150px;
      }
      body{
        background-image:url("house3.jpg");
        background-position: cover;
      }
      label{
        text-align: centre;
        font-size: 22px;
        font-family: arial;
        font-weight: bold;

      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><label>Tassia School</label></a>
<ul class="navbar-nav px-3">
<li class="nav-item text-nowrap">
  <a class="nav-link" href="login.php">Sign out </a>

</li>
</ul>
</nav>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="logo" src="landlord_logo.png" alt="" width="72" height="72">
    <h2>Manage Students</h2>
    <p class="lead">Add New Student </p>
  </div>

  <div class="row">
    <div class="col-md-5 order-md-2 mb-3">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">My Students</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <!--Insert For Loop for Defaulters ASAP-->
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Student Name</h6>
            <small class="text-muted"><?php echo "x Apartments" ?></small>
          </div>
          <span class="text-muted"></span>
          <button type="delete" class="btn btn-primary" name="delete">Delete</button>
        </li>
      <!---End of FOR LOOP-->

      </ul>



    </div>
    <div class="col-md-7 order-md-1">
      <h4 class="mb-3">Add Student</h4>
      <form class="needs-validation"   method="POST" action="add_stud">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="StudentName">Student Name</label>
            <input type="text" class="form-control" name="StudentName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Student name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="location">Date of Birth</label>
            <input type="date" class="form-control" name="DOB" placeholder="" value="" required>
            <div class="invalid-feedback">
            Location is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="apartments">Class</label>
          <select class="form-control" name="class">
              <option default>Select Class</option>
              <option value="Class 1">Class 1</option>
              <option value="Class 2">Class 2</option>
              <option value="Class 3">Class 3</option>
              <option value="Class 4">Class 4</option>
              <option value="Class 5">Class 5</option>
              <option value="Class 6">Class 6</option>
              <option value="Class 7">Class 7</option>
              <option value="Class 8">Class 8</option>
          </select>
            <div class="invalid-feedback">
             is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="gender">Gender</label>
          <select class="form-control" name="gender">
              <option default>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Prefer not to say">Prefer not to say</option>
          </select>
            <div class="invalid-feedback">
             is required.
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="phone">Guardian Contact<span class="text-muted"></span></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">+</span>
              </div>
              <input type="text" class="form-control" name="phone" placeholder="Phone" required>
              <div class="invalid-feedback" style="width: 100%;">
                Your email is required.
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="d.o.r">Date of Registration<span class="text-muted"></span></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"></span>
              </div>
              <input type="date" class="form-control" name="DOR"  required>
              <div class="invalid-feedback" style="width: 100%;">
                Your email is required.
              </div>
            </div>
          </div>

        </div>
          <hr class="mb-4">
        <input type="submit" class="btn btn-primary btn-block btn-lg" value= "Add Student" name="add_student">
      </form>

<?php
/*
if(isset($_POST['submit'])){
$StudentName = $_POST['StudentName'];
$location = $_POST['location'];
$apartNo = $_POST['apartmentNo'];
$email = $_SESSION['Email'];

$checkSQL = "SELECT landlord_id FROM landlord_details WHERE Email = '$email'";
$output=  $conn->query($checkSQL);
$row = $output->fetch_assoc();
$landlordID = $row['landlord_id'];
$landlordID1= $landlordID+ $apartNo;
$sql = "INSERT INTO Student_details (Student_name, location, apartments_owned, landlord_id) VALUES('$StudentName','$location','$apartNo','$landlordID1')";
insertData($sql);
}
*/
 ?>




    </div>
  </div>

  <?php
/*
  if(isset($_POST['submit2'])){
  $apartmentno = $_POST['apartmentno'];

  $rent = $_POST['rent'];

  $StudentID = 5;
  $sql23 = "INSERT INTO apartment_details (rent_charged,Student_id,apartment_no) VALUES('$rent','$StudentID','$apartmentno')";
  insertData($sql23);
  }
  */
   ?>


  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 Tassia School</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"></a></li>
      <li class="list-inline-item"><a href="#"></a></li>
      <li class="list-inline-item"><a href="#"></a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>
