<?php

/**
 * cart actions.
 *
 * @package    ecsite
 * @subpackage cart
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cartActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->carts = Doctrine_Core::getTable('Cart')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->cart = Doctrine_Core::getTable('Cart')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->cart);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CartForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CartForm();

    $userId = $request->getParameter('userId');
    $productId = $request->getParameter('productId');

    $request = [];
    $request["user_id"] = $userId;
    $request["product_id"] = $productId;
    $request["id"] = '' ;

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($cart = Doctrine_Core::getTable('Cart')->find(array($request->getParameter('id'))), sprintf('Object cart does not exist (%s).', $request->getParameter('id')));
    $this->form = new CartForm($cart);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($cart = Doctrine_Core::getTable('Cart')->find(array($request->getParameter('id'))), sprintf('Object cart does not exist (%s).', $request->getParameter('id')));
    $this->form = new CartForm($cart);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    var_dump($request->getParameter('id'));
    $this->forward404Unless($cart = Doctrine_Core::getTable('Cart')->find(array($request->getParameter('id'))), sprintf('Object cart does not exist (%s).', $request->getParameter('id')));
    $cart->delete();
    // $this->redirect('cart/delete');
  }

  protected function processForm($request, sfForm $form)
  {
    $form->bind($request, []);
    if ($form->isValid())
    {
      $cart = $form->save();

      $this->redirect('product/index');
    }
  }

  public function executeCartStock(sfWebRequest $request)
  {
      // セッションからユーザーIDを取得
      $this->userId = $this->getUser()->getAttribute('user_id');

      if ($this->userId) {
          $this->productIds = Doctrine_Core::getTable('Cart')
          ->createQuery('c')
          ->where('c.user_id = ?', $this->userId)
          ->select('c.product_id')
          ->execute()
          ->toArray(); 

          // さらに、product_idだけの配列を作成
          $this->productIds = array_column($this->productIds, 'product_id');

          $this->products = []; 
          foreach ($this->productIds as $productId) {
              $product = Doctrine_Core::getTable('Product')
                  ->createQuery('p')
                  ->where('p.id = ?', $productId)
                  ->select('p.name, p.price, p.image')
                  ->fetchOne(); 
          
              if ($product) {
                  $this->products[] = [
                      'name' => $product->getName(),
                      'price' => $product->getPrice(),
                      'image' => $product->getImage(),
                  ];
              }
          }
      } else {
          // ユーザーがログインしていない場合の処理
          return $this->redirect('user/login');
      }
  }
}
