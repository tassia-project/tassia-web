
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Manage Teachers</title>

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
        width: 150px;}
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
  <a class="nav-link" href="login.php">Sign out</a>
</li>
</ul>
</nav>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="logo" src="landlord_logo.png" alt="" width="72" height="72">
    <h2>Manage Teachers</h2>
    <p class="lead">Add and Edit Teachers</p>
  </div>

  <div class="row">
    <div class="col-md-5 order-md-2 mb-5">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Edit Teachers</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <!--Insert For Loop for VIEWING TEACHERS ASAP-->
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Teacher name</h6>
            <small class="text-muted"><?php echo "Haiya UUUWI" ?></small>
          </div>
          <button class="btn btn-primary" type="button" name="delete">Delete</button>
        </li>
      <!---End of FOR LOOP-->

      </ul>




    </div>
    <div class="col-md-7 order-md-1">
      <h3 class="mb-3">Add Teacher</h3>




      <form class="needs-validation" novalidate method="post" action="add_teach">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="phone">Phone  <span class="text-muted">(Optional)</span></label>
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

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>


        <h3> Subjects Taught </h3>
        <br>
        <div class="row">

          <div class="col-md-5 mb-3">
            <label for="subject">Maths</label>
            <input type="checkbox" name="maths" value="YES">
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="subject">English</label>
            <input type="checkbox" name="english" value="YES">
            <div class="invalid-feedback">
              Please provide a valid Apartment.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="subject">Swahili</label>
            <input type="checkbox" name="swahili" value="YES">
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="subject">Social Studies</label>
            <input type="checkbox" name="social_studies" value="YES">
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="subject"> C.R.E.</label>
            <input type="checkbox" name="CRE" value="YES">
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

        </div>

        <hr class="mb-4">

        <input type="submit"  class="btn btn-primary btn-lg btn-block" name="add_teacher" value="Add Teacher">
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;2019 Tassia School </p>
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
