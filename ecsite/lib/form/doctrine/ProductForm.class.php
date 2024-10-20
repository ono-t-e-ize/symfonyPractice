<?php

/**
 * Product form.
 *
 * @package    ecsite
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductForm extends BaseProductForm
{
    public function configure()
    {
        // created_atとupdated_atフィールドをオプショナルに設定
        $this->validatorSchema['created_at'] = new sfValidatorDateTime(array('required' => false));
        $this->validatorSchema['updated_at'] = new sfValidatorDateTime(array('required' => false));
    }
}