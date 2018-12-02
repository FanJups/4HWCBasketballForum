<?php
namespace App\Frontend;

use \OCFram\Application;

class FrontendApplication extends Application 
{
  public function __construct() 
  {
    parent::__construct();

    $this->name = 'Frontend';
  }

  public function run()
  {
    $controller = $this->getController();
    $controller->execute();

    $this->httpResponse->setPage($controller->page());
    $this->httpResponse->send();  
  } 
}