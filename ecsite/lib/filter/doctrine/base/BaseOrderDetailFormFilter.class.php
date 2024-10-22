<?php

/**
 * OrderDetail filter form base class.
 *
 * @package    ecsite
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOrderDetailFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'product_name'     => new sfWidgetFormFilterInput(),
      'total_amount'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_name'    => new sfWidgetFormFilterInput(),
      'delivery_address' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'product_name'     => new sfValidatorPass(array('required' => false)),
      'total_amount'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'customer_name'    => new sfValidatorPass(array('required' => false)),
      'delivery_address' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('order_detail_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrderDetail';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'product_name'     => 'Text',
      'total_amount'     => 'Number',
      'customer_name'    => 'Text',
      'delivery_address' => 'Text',
    );
  }
}
