<?php
namespace OCFram;

class NotNullValidator extends Validator
{
  public function isValid($value)
  {
    return $value != '';
  }
}