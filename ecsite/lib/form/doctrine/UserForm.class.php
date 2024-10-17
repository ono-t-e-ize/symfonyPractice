<?php

/**
 * User form.
 *
 * @package    ecsite
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserForm extends BaseUserForm
{
  public function configure()
  {
    $this->validatorSchema['password'] = new sfValidatorString(array('min_length' => 6));
    $this->validatorSchema['email'] = new sfValidatorEmail();

    // パスワードをハッシュ化
    $this->validatorSchema->setPostValidator(
        new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_confirm', array(), array('invalid' => 'The passwords do not match.'))
    );

    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->widgetSchema['password_confirm'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['created_at'] = new sfValidatorDateTime(array('required' => false));
    $this->validatorSchema['updated_at'] = new sfValidatorDateTime(array('required' => false));

  
}
}
