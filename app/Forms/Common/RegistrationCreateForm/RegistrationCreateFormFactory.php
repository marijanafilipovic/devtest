<?php
namespace app\Forms\Common\RegistrationCreateForm;

use app\Forms\Common\Elements\CreateFormFactoryInterface;
use app\Forms\Common\RegistrationCreateForm\Elements\RegistrationCreateFormBody;
use app\Forms\Common\RegistrationCreateForm\Elements\RegistrationCreateFormTitle;

class RegistrationCreateFormFactory implements CreateFormFactoryInterface
{
public function getTitle()
{
  $title = new RegistrationCreateFormTitle();
  return $title->getTitle();
}
public function getBodyElements()
{
 $formBody = new RegistrationCreateFormTitle();
 return $formBody->getTitle();
}
public function getSubmitAction()
{

}
}