<?php

namespace app\classes;
class FormValidation
{
    public $error = [];
    public $fields = [];
    public $name;
    public $email;
    public $pass;
    public $passTwo;

    public function __construct()
    {
         $this->error = [];
        $this->fields = ['name', 'email', 'pass', 'passTwo'];

}

    public function isRequiredPass($request)
    {
       // var_dump($request);
        foreach ($this->fields as $field) {
            if (empty($_POST[$field])) {
               $this->error[] = $field;
            }

        }
       return $this->error;
    }
    function match_pass($pass, $passTwo)
    {
        if ($pass == $passTwo) {
            return true;
        }

        if ($pass !== $passTwo) {

           return false;
            // array_push($error, $er);
 //var_dump($error);
        }
    }
    public function validSubmit($r){
        $this->name = self::test_input($r["name"]);
        $this->email = self::test_input($r["email"]);
        $this->pass = self::test_input($r["pass"]);
        $this->passTwo = self::test_input($r["passTwo"]);
        return ['name'=> $this->name, 'email' => $this->email,
            'pass' => $this->pass, 'passTwo'=> $this->passTwo];
    }
    public function  validLogIn($r){
        $this->email = self::test_input($r["email"]);
        $this->pass = self::test_input($r["pass"]);
        return ['email' => $this->email, 'pass' => md5($r['pass'])];
    }
    static function  test_input($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
