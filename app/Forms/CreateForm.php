<?php
namespace app\Forms;


use app\Forms\Common\Factories\CreateFormFactoryInterface;

class CreateForm
{
protected static $instance;
protected $createFormFactory;
public function __construct(CreateFormFactoryInterface $createFormFactory)
{
    $this->createFormFactory = $createFormFactory;
}
public static function getInstance(CreateFormFactoryInterface $createFormFactory){
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