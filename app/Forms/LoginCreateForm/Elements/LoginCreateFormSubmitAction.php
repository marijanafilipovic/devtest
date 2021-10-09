<?php


namespace app\Forms\LoginCreateForm;


use app\Forms\Common\Elements\CreateFormSubmitActionInterface;

class LoginCreateFormSubmitAction implements CreateFormSubmitActionInterface
{
protected $actionUrl;
public function __construct()
{
    $this->actionUrl = 'templates/login.php';
}
public function getActionUrl()
{
    return $this->actionUrl;
}
}