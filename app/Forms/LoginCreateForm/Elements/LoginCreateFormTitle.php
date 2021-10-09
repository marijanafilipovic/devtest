<?php


namespace app\Forms\LoginCreateForm;


use app\Forms\Common\Elements\CreateFormTitleInterface;

class LoginCreateFormTitle implements CreateFormTitleInterface
{
    protected $title;
    public function __construct()
    {
        $this->title = 'Welcome to login page';
    }
    public function getTitle()
    {
        return $this->title;
    }

}