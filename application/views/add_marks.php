
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Student Marks</title>

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
      table{
        border: 1px solid;
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><label>Tassia School</label></a>
<ul class="navbar-nav px-3">
<li class="nav-item text-nowrap">
  <a class="nav-link" href="login">Sign out </a>
</li>
</ul>
</nav>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">

    <h2>STUDENT MARKS</h2>
    <p class="lead">Select Class and Exam to Add Marks </p>
  </div>

  <div class="row">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">ADD EXAM MARKS</h4>
      <form class="needs-validation"   method="POST" action="view_markstable">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="StudentName">Select Class</label>
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
                <option value="%">All Classes</option>
            </select>
            <div class="invalid-feedback">
              Class is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="examination">Select Examination</label>
            <select class="form-control" name="exam">
                <option default>Select Exam</option>
                <option value="opener">Opener Exam</option>
                <option value="mid-term">Mid-Term</option>
                <option value="end-term">End-Term</option>
                <option value="%">All Exams</option>
            </select>
            <div class="invalid-feedback">
            Examination is required.
            </div>
          </div>

            </div>
          </div>

        </div>
          <hr class="mb-4">
        <input type="submit" class="btn btn-primary btn-block btn-lg" value= "View Marks Table" name="view_students">
      </form>
      <br><br><br>
    <form class="" action="add_studentmarks" method="post">

      <table class = "table table-striped table-sm">
    <thead class="table-dark">
      <tr>
        <th>St.ID</th>
        <th>Name</th>
        <th>Class</th>
        <th>Maths</th>
        <th>English</th>
        <th>Swahili</th>
        <th>Science</th>
        <th>Social_Studies</th>
        <th>CRE</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-hover">
    <?php
if(isset($_POST['view_students'])){
    $this->load->model('main_model');
  $get_data = $this->main_model->get_data();
    if($get_data->num_rows()>0){
foreach ($get_data->result() as $row)
{
  ?>
  <tr>
    <td> <input type="text" name="student_id" value="<?php echo $row->student_ID;?>" disabled style= "width: 30px;">  </td>
    <td>  <input type="text" name="student_name" value="<?php echo $row->name;?>" disabled> </td>
    <td>  <input type="text" name="class" value="<?php echo $row->class;?>" disabled> </td>
    <td> <input type="number" name="maths"  style="width: 65px;"> </td >
    <td> <input type="number" name="english"  style="width: 65px;">  </td>
    <td>  <input type="number" name="kiswahili"  style="width: 65px;"></td>
    <td> <input type="number" name="science"  style="width: 65px;"> </td>
    <td>  <input type="number" name="social_studies" style="width: 75px;">   </td>
    <td> <input type="number" name="cre"  style="width: 65px;">  </td>
    <td> <input type="submit" name="add_mark" value="Add Mark" class="btn btn-primary btn-block"> </td>
  </tr>
  <?php
  // code...
}

}
else
 {
?>
<tr><td colspan = '9'> No data was entered </td>
<td>
  <a class="btn btn-primary btn-block" href="add_student">Add Student</a>
</td>
</tr>
<?php
}
}
?>
</table>
</form>




    </div>
  </div>




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
