<?php


namespace app\Forms\RegistrationCreateForm\Elements;


use app\Forms\Common\Elements\CreateFormSubmitActionInterface;

class RegistrationCreateSubmitAction implements CreateFormSubmitActionInterface
{
    protected $actionUrl;
public function __construct()
{
    $this->actionUrl = 'new-registration.php';
}
public function getActionUrl()
{
  return $this->actionUrl;
}

}