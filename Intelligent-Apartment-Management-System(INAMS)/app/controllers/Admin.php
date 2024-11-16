<!--------FOR ADMIN------------>

<?php

class Admin extends Controller
{
    public function index()
    {
        $this->view('admin/admin');
    }
}