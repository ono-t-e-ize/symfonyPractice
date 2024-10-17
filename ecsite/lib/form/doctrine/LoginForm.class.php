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
            'email' => new sfValidatorEmail(),
            'password' => new sfValidatorString(),
        ));
    }
}