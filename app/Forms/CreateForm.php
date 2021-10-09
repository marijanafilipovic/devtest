<?php
namespace app\Forms;


use app\Forms\Common\Elements\CreateFormFactoryInterface;

class CreateForm
{
protected static $instance;
protected $createFormFactory;
private function __construct(CreateFormFactoryInterface $createFormFactory)
{
    if(empty(self::$instance)){
        self::$instance = new CreateForm($createFormFactory);
    }
    return self::$instance;

}
public function getTitle(){
    return $this->createFormFactory->getTitle();
}
public function getBodyElements(){
    return $this->createFormFactory->getBodyElements();
}
public function getSubmitAction(){
    return $this->createFormFactory->getSubmitAction();
}
}