<?php

class Student extends Model
{
    
    public function validate($data)
    {
        $arr['status'] = 'Pending';
        $this->errors = [];
       

        if(empty($data['lname']))
        {
            $this->errors['lname'] = "Last Name is required";
        }

        if(empty($data['fname']))
        {
            $this->errors['fname'] = "First Name is required";
        }

        if(empty($data['gender']))
        {
            $this->errors['gender'] = "Gender is required";
        }

        if(empty($data['address']))
        {
            $this->errors['address'] = "Address is required";

        }else if(strlen($data['address']) < 5) 
        {
            $this->errors['address'] = "Invalid Address";
        }

        if(empty($data['phone_number']))
        {
            $this->errors['phone_number'] = "Phone Number is required";
        }

        if(empty($data['email']))
        {
            $this->errors['email'] = "Email is required!";

        }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "Invalid Email!";

        }

        if(empty($data['student_id']))
        {
            $this->errors['student_id'] = "Student Id is required!";

        }else if(strlen($data['student_id']) != 10) 
        {
            $this->errors['student_id'] = "Invalid Student Id";
        }

        if(empty($data['course']))
        {
            $this->errors['course'] = "Course is required";

        }else if(is_numeric($data['course'])) 
        {
            $this->errors['student_id'] = "Invalid Course";
        }

        if(empty($data['sec']))
        {
            $this->errors['sec'] = "Section is required";

        }else if(strlen($data['sec']) > 1)
        {
            $this->errors['sec'] = "Invalid Section";
        }
        

        if(empty($data['year_level']))
        {
            $this->errors['year_level'] = "Year Level is required";
        }

        if(empty($data['doc']))
        {
            $this->errors['doc'] = "Please choose a document type";
        }

        if(empty($data['sem']))
        {
            $this->errors['sem'] = "Semester is required";
        }

        if(empty($data['date']))
        {
            $this->errors['date'] = "Date is required";
        }

       
        
        if(count($this->errors) == 0)
        {
            return true;
        }
            return false;
    }
}