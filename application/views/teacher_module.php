<!DOCTYPE html>
<html>

 <head>
  <title>TASSIA SYSTEM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 <style media="screen">
 .logo{
   width: 120px;
   height: 80px;
   float: left;
 }
 .column{
   margin-left: 10px;
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
 nav{
   height: 82px;
   border: 4px solid;
   background-color: #840606;
 }
 nav h1{
   text-align: center;
  color:#D0CFCF;
 }
 .logo{
   width: 120px;
   height: 80px;
   float: left;
 }
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  width: 250px;
}
.dropbtn1 {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.drops {
align-items: center;
align-content: center;
margin-top: -150px;
margin-left: 500px;
}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown1 {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.dropdown-content2 a:hover {background-color: #ddd;}

.dropdown1:hover .dropdown-content2 {display: block;}

.dropdown1:hover .dropbtn1 {background-color: #3e8e41;}

.butt{
margin-top: 50px;
margin-left: 500px;
}

.subjects {
   margin-left: 950px;
   margin-top: -250px;
   padding-top: 10px;
}
.subjects ul {
  border: 2px;
  border-style: solid;
  border-color: #FF0000;
  padding: 20px;
  display: inline-block;
   box-sizing: content-box;
  width: 300px;
  height: 100px;
  margin-top: -20px;
  }
</style>
</head>
<nav class="navbar">
  <img class="logo" src="<?php echo base_url();?>images/tassia.jpeg" alt="LOGO">
  <div class="heading">
   <h1>School Academics System</h1>
 </div>
</nav>
    <body>
	     <h1> TASSIA SYSTEM </h1>
		 <div class = "column">
		    <p> Name: Teacher Sonnie </p>
			<p> Term: 3 </p>
			<p> Date: 16th September 2019 </p>
		 </div>
		   <div class= "button">
		    <button type="button" ><b>Students Reports</b></button>
		      </div>
			  <div class= "drops">
		 <div class="dropdown">
            <button class="dropbtn"><b>Students</b></button>
              <div class="dropdown-content">
              <a href="#">Add Student</a>
              <a href="#">View Student</a>
              </div>
        </div>
<br><br><br>
	     <div class="dropdown">
            <button class="dropbtn"><b>Marks   </b></button>
              <div class="dropdown-content">
              <a href="#">Add Subject Marks</a>
              <a href="#">View Subject Marks</a>
              </div>
        </div>
		</div>

		<div class= "butt">
		<button type="button" ><b>Students Attendance</b></button>
		</div>

		<div class= "subjects">
		     <h1>Subjects Taught: </h1>
         <br>
			 <ul>
			  </ul>
		</div>

	</body>

</html>
