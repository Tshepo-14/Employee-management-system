<?php
class User{
   
    public $username;
    public $email;
    public $surname;
    public $password;
    public $adress;
    public $department;
    public $job;
    public $timestampArrive;
    public $timestampLeave;
    
    function setEmail($email)
    {
        $this->email=$email;
    }
    
    function setDetails( $surname ,$username, $email ,$password, $adress, $department, $job)
    {
       
        $this->surname=$surname;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->adress=$adress;
        $this->department=$department;
        $this->job=$job;
        
        
    }
    //set time arrive
    function setTimeArrive($timestampArrive)
    {
        return $this->timestampArrive;
    }
    //set timeleave
    function setTimeLeave($timestampLeave)
    {
       return $this->timestampLeave;
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
    //returnTimeArrive
    function returnTimeArrive()
    {
        return $this->timestampArrive;
    }
    //returnTimeLeft
    function returnTimeLeave()
    {
        return $this->timestampLeave;
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