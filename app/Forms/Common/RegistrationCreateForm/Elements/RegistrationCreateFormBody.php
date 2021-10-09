<?php
namespace app\Forms\Common\RegistrationCreateForm\Elements;

use app\Forms\Common\Elements\CreateFormBodyInterface;

class RegistrationCreateFormBody implements CreateFormBodyInterface
{
protected $elements;
public function __construct()
{

    $elements = [
        ['type'=>'email', 'name'=>'email','text'=>'email', 'placeholder'=>'example#gmail.com', 'required'],
        ['type'=>'input', 'name'=>'name', 'placeholder'=>'example#gmail.com', 'text', , 'required'],
        ['type'=>'input', 'name'=>'pass', 'required' ],
        ['type'=>'input', 'name'=>'pas_two', 'required'],
    ];
}
public function getBodyElements()
{
    return $this->elements;
}
}