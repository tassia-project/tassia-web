 <?php
 class main_model extends CI_Model
   {

   public function insert_data($data)
   {
   $this->db->insert("users", $data);

   }

   public function fetch_data()
   {
     $this->load->database();
     $examination = $_POST['exam'];
     $class = $_POST['class'];
   $query = $this->db->get_where("term1_marks", array('examination' => $examination, 'class' => $class));
   return $query;
   }
   public function get_data()
   {
     $this->load->database();
     $exam = $_POST['exam'];
     $class = $_POST['class'];
     $get_query = $this->db->get_where("student", array('class' => $class));
     return $get_query;

   }
   public function delete_data($id)
       {

         $this->db->delete('users',array('UserID' => $id));

       }
  public function login()
  {
 include 'C:\xampp\htdocs\codeigniter\application\controllers\connect.php';
    if(isset($_POST['submit'])){
    $user= $_POST['username'];
    $password= $_POST['password'];
    $login_sql= "SELECT * FROM users WHERE username ='$user'";
      $output=  connect()->query($login_sql);
        // code...
    $row = $output->fetch_assoc();
        $verify= $row['password'];
        $usertype= $row['usertype'];
         if(($password == $verify) && $usertype == "ADMIN"){
            echo "Verified";
          $SESSION['UserID'] = $row['UserID'];
           $_SESSION['username']= $row['username'];
           //$_SESSION['FName']= $row['Fname'];
           $_SESSION['usertype']= $usertype;
           redirect("main/module_admin", "refresh");
          }
          if(password_verify($password, $verify) && $usertype== 'Client'){
            $SESSION['UserID'] = $row['UserID'];
            $_SESSION['Username']= $row['Username'];
            $_SESSION['UserType']= $usertype;
         redirect("main/module_teacher", "refresh");
          }
          else{

              echo '<script language="javascript">';
              echo 'alert("USERNAME OR PASSWORD INCORRECT")';
              echo '</script>';
              redirect("main/login", "refresh");
          }
        }
  }
public function register_code(){
 include 'C:\xampp\htdocs\codeigniter\application\controllers\connect.php';
  if(isset($_POST['register']))
  {
    $username= $_POST['username'];
    $password= $_POST['password'];
    $usertype=$_POST['usertype'];
    $reg_sql = "INSERT INTO users (username, password, usertype) VALUES ('$username','$password','$usertype')";
    insertData($reg_sql);
    redirect("main/register", "refresh");
     }
   }
public function add_teachers(){
  include 'C:\xampp\htdocs\codeigniter\application\controllers\connect.php';
   if(isset($_POST['add_teacher']))
   {

     $FName= $_POST['firstName'];
     $LName= $_POST['lastName'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
    $Maths = $_POST['maths'];
    $English = $_POST['english'];
    $Swahili = $_POST['swahili'];
    $SST = $_POST['social_studies'];
    $CRE = $_POST['CRE'];
     $teach_sql = "INSERT INTO teacher (first_name, last_name, Email,PhoneNo,Maths,English,Swahili,social_Studies, CRE) VALUES ('$FName','$LName','$email','$phone','$Maths','$English','$Swahili','$SST','$CRE')";
     insertData($teach_sql);
     echo '<script language="javascript">';
     echo 'alert("Record Created Successfully")';
     echo '</script>';
     redirect("main/add_teacher", "refresh");
      }
}
public function add_students(){
  include 'C:\xampp\htdocs\codeigniter\application\controllers\connect.php';
   if(isset($_POST['add_student']))
   {

     $StudentName= $_POST['StudentName'];
     $Class= $_POST['class'];
     $DOB = $_POST['DOB'];
     $DOR = $_POST['DOR'];
    $Gender = $_POST['gender'];
    $Phone= $_POST['phone'];

     $stud_sql = "INSERT INTO student (name, gender,class, phone_number, reg_date, DOB) VALUES ('$StudentName','$Gender','$Class','$Phone','$DOR','$DOB')";
     insertData($stud_sql);
     echo '<script language="javascript">';
     echo 'alert("Record Created Successfully")';
     echo '</script>';
     redirect("main/add_student", "refresh");
      }
}
public function views_marks(){
  include 'C:\xampp\htdocs\codeigniter\application\controllers\connect.php';
   if(isset($_POST['view_marks']))
   {
$class = $_POST['class'];
$examination = $_POST['exam'];
$marks_sql = "SELECT * FROM term1_marks WHERE class == '$class' && examination == '$examination'";
return connect()->query($marks_sql);
  // code...
//return $marks_output->fetch_assoc();
   }
}
public function marks_add(){
  
}
public function show_students(){
  include 'C:\xampp\htdocs\codeigniter\application\controllers\connect.php';

}
}

?>
