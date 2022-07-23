<?php
class User{
    public $emp_num;
    public $username;
    public $email;
    public $surname;
    public $password;
    public $sex;
    

    function setDetails($emp_num, $surname ,$username, $email ,$password, $sex)
    {
        $this->emp_num=$emp_num;
        $this->username=$username;
        $this->surname=$surname;
        $this->email=$email;
        $this->password=$password;
        $this->sex=$sex;
        
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
    function returNpassWord()
    {
        return $this->password;
    }
    //gender
    function returnSex()
    {
        return $this->sex;

    }
    //username
    function returnemail()
    {
        return $this->email;

    }
}

Class Job{
    public $emp_num;
    public $department;
    public $job;
    public $salary;

}

?>