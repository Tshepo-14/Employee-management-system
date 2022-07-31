<?php
class User{
    public $emp_num;
    public $username;
    public $email;
    public $surname;
    public $password;
    public $adress;
    public $department;
    public $job;
  
    
    function setDetails($emp_num, $surname ,$username, $email ,$password, $adress, $department, $job)
    {
        $this->emp_num=$emp_num;
        $this->username=$username;
        $this->surname=$surname;
        $this->email=$email;
        $this->password=$password;
        $this->adress=$adress;
        $this->department=$department;
        $this->job=$job;
        
        
    }
    //empNum
    function returnEmpNum()
    {
        return $this->emp_num;
    }
    //name
    function returnName()
    {
        return $this->username;
    }
    //surname
    function returnSurname()
    {
        return $this->surname;
    }
    //password
    function returnPassWord()
    {
        return $this->password;
    }
    //gender
    function returnAdress()
    {
        return $this->adress;

    }
    //username
    function returnemail()
    {
        return $this->email;
    }
    //job
    function returnJob()
    {
        return $this->job;
    }
    //department
    function returndepartment()
    {
        return $this->department;
    }
    
}

Class Job{
    var $emp_num;
    var $department;
    var $job;
    var $salary;

    //function set
    function setjob($emp_num,$department,$job,$salary)
    {
        $this->emp_num=$emp_num;
        $this->department=$department;
        $this->job=$job;
        $this->salary=$salary;
    }

    //getDetails
    function returnEmpNum()
    {
        return $this->emp_num;
    }
    function returndepartment()
    {
        return $this->department;
    }
    function returnjob()
    {
        return $this->job;
    }
    function returnsalary()
    {
        return $this->salary;
    }
}


?>