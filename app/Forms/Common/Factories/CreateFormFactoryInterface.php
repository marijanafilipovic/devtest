<?php
namespace app\Forms\Common\Elements;

interface CreateFormFactoryInterface
{
public function getTitle();
public function getBodyElements();
public function getSubmitAction();
}