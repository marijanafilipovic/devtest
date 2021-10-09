<?php


namespace app\Forms\RegistrationCreateForm\Elements;

use app\Forms\Common\Elements\CreateFormTitleInterface;

class RegistrationCreateFormTitle implements CreateFormTitleInterface
{
protected $title;

public function __construct(){
    $this->title = 'Welcome to registration.';
}
public function getTitle()
{
  return $this->title;
}
}