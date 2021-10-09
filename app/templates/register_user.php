

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="email">Email</label>
    <div>
        <input type="email" name="email" />
    </div>
    <label for="name">Name</label>

    <input type="text" name="name" value="" />
    <input type="text" name="pass"value=""/>
    <input type="text" name="passTwo" value=""/>
    <input type="submit" value="Submit">
</form>


<?php
include_once '..\classes\FormValidation.php';
include_once '..\config\DBconnection.php';
include_once '..\classes\User.php';
$error =array();
$opt = [];
$errMsg='';
if(!empty($error))
{
    var_dump($error);
}
$fields = ['name', 'email', 'pass', 'passTwo'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $validation = new \app\classes\FormValidation();
        $requiredFailed = $validation->isRequiredPass($_POST);
        if($requiredFailed)
        {
            foreach($requiredFailed as $f) {
                $errMsg .='<p style="color:darkred; text-transform:uppercase;">'. $f . ' is require field.<br />';
            }
            echo $errMsg;
        }
        if(!$requiredFailed ) {

            $checkP = new \app\classes\FormValidation();
            $sanitize = $checkP->validSubmit($_POST);
            // var_dump($sanitize);
            $passCeck = $checkP->match_pass($sanitize['pass'], $sanitize['passTwo']);
            //  var_dump($passCeck);
            if($passCeck == true){
                echo "CREATE NEW USER";
                $user = new \app\classes\User();
                // CRYPT PASSWORD
                $user->registerUser($sanitize['name'], $sanitize['email'], md5($sanitize['pass'] ));

            }else{
                $r = 'Correct your passwords to match.';
                echo $r;
            }
            /*   try{



               }catch (\mysql_xdevapi\Exception $exception ){

               }*/

        }else{
        }
    }




?>