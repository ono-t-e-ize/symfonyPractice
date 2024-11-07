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
        // 既存の設定（もしあれば）
        
        // 画像フィールドを追加
        $this->widgetSchema['image'] = new sfWidgetFormInputFile();
        $this->validatorSchema['image'] = new sfValidatorFile(array(
            'required'   => false, 
            'mime_types' => 'web_images', // 画像ファイルのMIMEタイプを許可
            'path'       => sfConfig::get('sf_upload_dir') . '/images', // 保存先ディレクトリ
        ));
    }
}