<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 session_start();
 class main extends CI_Controller {

      //functions
  function __construct() {
parent::__construct();
// Load url helper
$this->load->helper('url','html');
$this->load->library('form_validation');
$this->load->helper(array('form', 'url'));
}

public function verify(){
    $this->load->model('main_model');
    $this->main_model->login();
  }
public function login()
{
$this->load->view('login');
}
public function add_teacher(){
  $this->load->view('add_teacher');
}
public function add_teach(){
$this->load-> model('main_model');
$this->main_model->add_teachers();
}
public function module_admin(){
  require 'connect.php';
  $conn = connect();
  $this->load->view('module_admin');
}
public function module_teacher(){
  require 'connect.php';
  $conn = connect();
  $this->load->view('module_teacher');
}
public function add_student(){
  $this->load->view('add_student');
}
public function add_stud(){
$this->load-> model('main_model');
$this->main_model->add_students();
}
public function student_marks(){
$this->load->view('student_marks');

}
public function view_marks(){
  $this->load->model('main_model');
$fetch_data = $this->main_model->fetch_data();
$this->load->view('student_marks',$fetch_data);
}
public function add_marks()
{
  $this->load->view('add_marks');
}
public function view_markstable(){
  $this->load->model('main_model');
  $get_data = $this->main_model->get_data();
  $this->load->view('add_marks',$get_data);
}
public function add_studentmarks(){
  $this->load->model('main_model');
  $this->main_model->marks_add();
}
public function register()
{
$this->load->view('register');
}
public function reg(){
$this->load-> model('main_model');
$this->main_model->register_code();
}

public function delete_data()
{
$id = $this ->uri -> segment(3);
$this ->load -> model('main_model');
$this ->main_model -> delete_data($id);
echo "It is deleted";
//redirect ('Admin/deleted');
}
      public function teacher_module()
      {
           $this->load->view('teacher_module');
      }
      public function admin()
      {
           $this->load->view('admin');
      }
      public function classes()
      {
           $this->load->view('classes');
      }
      public function admin_module(){
       $this->load->view('admin_module');
     }
   }
