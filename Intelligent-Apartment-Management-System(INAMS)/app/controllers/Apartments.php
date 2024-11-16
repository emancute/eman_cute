<!--------FOR ADMIN------------>
<?php

class Apartments extends Controller
{
    public function index()
    {
        $this->view('admin/apartments');
    }
}