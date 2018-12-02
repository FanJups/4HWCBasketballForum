<?php
namespace OCFram;

class FormHandler
{
  protected $form;
  protected $manager;
  protected $request;

  public function __construct(Form $form, Manager $manager, HTTPRequest $request)
  {
    $this->setForm($form);
    $this->setManager($manager);
    $this->setRequest($request);
  }

  public function process()
  {
    if($this->request->method() == 'POST' && $this->form->isValid())
    {
      $this->manager->save($this->form->entity());

      return true;
    }

    return false;
  }

  public function setForm(Form $form)
  {
    $this->form = $form;
  }

  public function setManager(Manager $manager)
  {
    $this->manager = $manager;
  }

  public function setRequest(HTTPRequest $request)
  {
    $this->request = $request;
  }
}