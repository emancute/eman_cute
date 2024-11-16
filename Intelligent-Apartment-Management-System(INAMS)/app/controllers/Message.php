<!--------FOR TENANTS------------>
<?php

class Message extends Controller
{
  public function index()
  {

    $this->view('tenants/message');
  }
}