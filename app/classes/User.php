<?php
namespace app\classes;

use app\classes\DBconnection;
use mysql_xdevapi\Exception;
use PDO;
class User
{
protected $name;
protected $email;
protected $pass;
protected $table = 'users';

public function registerUser($name, $email, $pass)
{
    $instance =   \app\classes\DBconnection::getInstance();
    $pdo = $instance->getConnection();
    $q = $pdo->prepare('INSERT INTO users (name,email, pass) VALUES (:name, :email, :pass)');
    $q->execute([
     ':name' => $name,
     ':email' => $email,
     ':pass' => $pass
    ]);
   return ['Msg' => 'Successful registration'];
       //http_redirect("Location:localhost://devtest/app/index.php");
}
public function getUser($email, $pass){
    $instance =   \app\classes\DBconnection::getInstance();
    $pdo = $instance->getConnection();
        $q = $pdo->prepare("SELECT * FROM users WHERE  email = :email AND password = :password");
        $q->bindParam(":email", $email);
        $q->bindParam(":password", $pass);
        $q->execute();
         $u = $q->fetch();
 //var_dump($u);
return $u;
      /*
            //http_redirect("Location:localhost://devtest/app/index.php");
    }catch (Exception $exception){
        var_dump("SOMETHING GOT WRONG");
    }*/



}
}
//, header("Location:localhost://devtest/app/index.php")