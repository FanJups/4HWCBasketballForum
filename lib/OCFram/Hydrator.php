<?php
namespace OCFram;

trait Hydrator
{
  public function hydrate($data)
  {
    foreach ($data as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if (is_callable([$this, $method]))
      {
        $this->$method($value);
      }
    }
  }
}