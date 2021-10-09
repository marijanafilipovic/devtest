<?php
namespace app\Forms\RegistrationCreateForm;

use app\Forms\Common\Factories\CreateFormFactoryInterface;
use app\Forms\RegistrationCreateForm\Elements\RegistrationCreateFormBody;
use app\Forms\RegistrationCreateForm\Elements\RegistrationCreateFormTitle;
use app\Forms\RegistrationCreateForm\Elements\RegistrationCreateSubmitAction;

class RegistrationCreateFormFactory implements CreateFormFactoryInterface
{
public function getTitle()
{
  $title = new RegistrationCreateFormTitle();
  return $title->getTitle();
}
public function getBodyElements()
{
 $formBody = new RegistrationCreateFormBody();
 return $formBody->getBodyElements();
}
public function getSubmitAction()
{
$submitAction = new RegistrationCreateSubmitAction();
return $submitAction->getActionUrl();
}
}