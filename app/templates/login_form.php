
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="email">Email</label>
    <div>
        <input type="email" name="email" />
    </div>

    <input type="text" name="pass" value=""/>

    <input type="submit" value="Submit">
</form>

<?php
session_start();

include_once '..\classes\FormValidation.php';
include_once '..\config\DBconnection.php';
include_once '..\classes\User.php';
$errMsg='';
$Msg='';
if($Msg !==''){
    echo $Msg;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validation = new \app\classes\FormValidation();
    $data = $validation->validLogIn($_POST);
    $login = new \app\classes\User();
    $log = $login->getUser($data['email'] , $data['pass']);

    if($log){
          $_SESSION['name'] = $log['name'];
        $_SESSION['uid'] = $log['id'];
         Header("Location:../index.php");
        echo $log['email'] . '<br />';
        echo $log['password'] ;
        var_dump($_SESSION['uid']);
    }

}


