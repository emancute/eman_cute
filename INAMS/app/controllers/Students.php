<?php

class Students extends Controller
{
    public function index()
  {

    $student = new Student();
    $rows = $student->findAll();
    $data = $student->findAll();
   
    $this->view('users/index', [
    'rows' => $rows
    ]);
  }
  
  public function studentrequest()
  {

    $errors = [];
    
    $student = new Student();
   
    if(count($_POST) > 0)
    {
       
      if ($student->validate($_POST)){
     
      $student->insert($_POST);

      $_SESSION['stat'] = "Request Sent!";
      $_SESSION['status_code'] = "success";
      
      redirect ('students');
      
      }else{
        $errors = $student->errors;
        // $_SESSION['stat'] = "Request Not Sent!";
        // $_SESSION['status_code'] = "error";
      }
      
    }
      
      $this->view('users/studentrequest', [
      'errors' =>$errors
    ]);
  }


  public function dashboard($id)
  {
    if (!Auth::logged_in()){
      redirect('admins');
    }
    $student = new Student();
    $arr['id'] =$id;
    $row = $student->first($arr);

    if(isset($_POST['update']))
    
    {
    
    $arr['status'] = $_POST['status'];
    $student->update($id, $arr);

    $_SESSION['stat'] = "Request Updated Successfully!";
    $_SESSION['status_code'] = "success";

    redirect ('students');
    }

    if(isset($_POST['delete']))
    {
    $student->delete($id);

    $_SESSION['stat'] = "Request Deleted Successfully!";
    $_SESSION['status_code'] = "success";
    
    redirect('students');
    
    }
 
    $this->view('users/dashboard',[
      'student' => $row
    ]);
    
    
  }

  
}
