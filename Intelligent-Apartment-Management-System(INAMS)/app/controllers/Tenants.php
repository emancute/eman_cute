<!--------FOR TENANT------------>
<?php

class Tenants extends Controller
{
    public function index()
    {
        $this->view('tenants/home');
    }
}