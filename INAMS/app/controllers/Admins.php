<?php

class Admins extends Controller
{
    public function index()
  {
    
    $errors = [];
    
    $admin = new Admin();

    if (count($_POST) > 0)
    {
      $arr['username'] = $_POST['username'];
     
      
      $row = $admin->first($arr);

      if($row)
      {
        if($_POST['password']== $row->password)
        {

          Auth::authenticate($row);

          redirect('home');
        }else{
          $errors['errors'] = 'Email or Password invalid';
        }
      }else{
       $errors['errors'] = 'Email or Password invalid';
       
      }
    }
    $this->view('users/admin',[
      'errors' =>$errors
    ]);
  }
 
}