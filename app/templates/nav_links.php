<?php
namespace app\templates;
/*
class navLinks{

    public $login;
    protected $register;
    public $search;

    public function __construct(){
        $this->login ='<a src="*">Loging</a>';
        $this->register = '<a src="*">Register</a>';
        $this->search= '<a src="*">Search</a>';

        return [$this->login, $this->register, $this->search];
    }
}*/
?>
<div class="container">
    <div class="col-md-12">
   <?php

   session_start();
   if(isset($_SESSION['uid'])) {
       ?><a href="templates/logout.php">Log out <?php echo $_SESSION['name'];  ?></a>
<?php
        }else{
       ?>
        <a href="templates/login_form.php">Login</a>

        <?php
        }
        ?>
        <a href="templates/new_form.php">Register</a>
    </div>
</div>
