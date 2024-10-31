<?php
class CartDeleteForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'user' => new sfWidgetFormInputUserId(),
      'productId' => new sfWidgetFormInputProductId(),
    ));

    $this->setValidators(array(
      'user' => new sfValidatorString(array('required' => true)),
      'productId' => new sfValidatorString(array('required' => true)),
    ));

    $this->widgetSchema->setNameFormat('login[%s]');
  }
}