<?php

/**
 * OrderDetail form base class.
 *
 * @method OrderDetail getObject() Returns the current form's model object
 *
 * @package    ecsite
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOrderDetailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'product_name'     => new sfWidgetFormInputText(),
      'total_amount'     => new sfWidgetFormInputText(),
      'customer_name'    => new sfWidgetFormInputText(),
      'delivery_address' => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'total_amount'     => new sfValidatorNumber(),
      'customer_name'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'delivery_address' => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('order_detail[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderDetail';
  }

}
