<?php
namespace app\Forms\RegistrationCreateForm\Elements;

use app\Forms\Common\Elements\CreateFormBodyInterface;

class RegistrationCreateFormBody implements CreateFormBodyInterface
{
protected $elements;
public function __construct()
{

    $elements = [
        ['type'=>'email', 'name'=>'email','text'=>'email', 'placeholder'=>'example#gmail.com'],
        ['type'=>'input', 'name'=>'name', 'placeholder'=>'example#gmail.com'],
        ['type'=>'input', 'name'=>'pass' ],
        ['type'=>'input', 'name'=>'pas_two']
    ];
}
public function getBodyElements()
{
    return $this->elements;
}
}