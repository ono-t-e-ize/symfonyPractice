<?php
class LoginForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'email' => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputPassword(),
    ));

    $this->setValidators(array(
      'email' => new sfValidatorString(array('required' => true)),
      'password' => new sfValidatorString(array('required' => true)),
    ));

    $this->widgetSchema->setNameFormat('login[%s]');
  }
}