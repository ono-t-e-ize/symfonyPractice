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
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'product_name'     => new sfValidatorPass(array('required' => false)),
      'total_amount'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'customer_name'    => new sfValidatorPass(array('required' => false)),
      'delivery_address' => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
