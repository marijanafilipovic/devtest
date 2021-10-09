<?php
namespace app\Forms\Common\Factories;

interface CreateFormFactoryInterface
{
public function getTitle();
public function getBodyElements();
public function getSubmitAction();
}