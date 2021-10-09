<?php
namespace app\Forms\LoginCreateForm;

use app\Forms\Common\Elements\CreateFormBodyInterface;

class LoginCreateFormBody implements CreateFormBodyInterface
{
    protected $elements;
    public function __construct()
    {
        $this->elements=[
            ['type' => 'text', 'name' => 'name', 'placeholder' => 'username'],
        ];
    }
    public function getBodyElements()
    {
        return $this->elements;
    }

}