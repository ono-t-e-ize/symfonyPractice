<?php

/**
 * User filter form base class.
 *
 * @package    ecsite
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'last_name'  => new sfWidgetFormFilterInput(),
      'first_name' => new sfWidgetFormFilterInput(),
      'email'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phone'      => new sfWidgetFormFilterInput(),
      'password'   => new sfWidgetFormFilterInput(),
      'address'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'last_name'  => new sfValidatorPass(array('required' => false)),
      'first_name' => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'phone'      => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'address'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'last_name'  => 'Text',
      'first_name' => 'Text',
      'email'      => 'Text',
      'phone'      => 'Text',
      'password'   => 'Text',
      'address'    => 'Text',
    );
  }
}
