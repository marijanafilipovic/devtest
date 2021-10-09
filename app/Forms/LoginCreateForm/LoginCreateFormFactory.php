<?php
namespace app\Forms\LoginCreateForm;

use app\Forms\Common\Factories\CreateFormFactoryInterface;

class LoginCreateFormFactory implements CreateFormFactoryInterface
{
    public function getTitle()
    {
        $title = new LoginCreateFormTitle();
        return $title->getTitle();
    }
    public function getBodyElements()
    {
    $elements = new LoginCreateFormBody();
    return $elements->getBodyElements();
    }
    public function getSubmitAction()
    {
        $submitAction = new LoginCreateFormSubmitAction();
        return $submitAction->getActionUrl();
    }

}