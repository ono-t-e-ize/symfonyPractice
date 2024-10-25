<?php

/**
 * orderDetail actions.
 *
 * @package    ecsite
 * @subpackage orderDetail
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class orderDetailActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->order_details = Doctrine_Core::getTable('OrderDetail')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->order_detail = Doctrine_Core::getTable('OrderDetail')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->order_detail);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new OrderDetailForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new OrderDetailForm();
    
    
    $productNames = $request->getParameter('productNames');
    $totalAmount = $request->getParameter('totalAmount');
    $customerName = $request->getParameter('customerName');
    $deliveryAddress = $request->getParameter('deliveryAddress');
    $userId = $request->getParameter('userId');

    $request = [];
    $request["product_name"]=$productNames;
    $request["total_amount"]=$totalAmount;
    $request["customer_name"]=$customerName;
    $request["delivery_address"]=$deliveryAddress;
    $request["id"]='';

    $this->processForm($request, $this->form);
   
    $this->setTemplate('new');

    if ($userId) {
      $this->cartIds = Doctrine_Core::getTable('Cart')
      ->createQuery('c')
      ->where('c.user_id = ?', $userId)
      ->select('c.id')
      ->execute()
      ->toArray(); 
      $this->cartIds = array_column($this->cartIds, 'id');
    }

    foreach($this->cartIds as $cartId){
      $dispatcher = $this->getContext()->getEventDispatcher(); // sfEventDispatcherのインスタンスを取得
      $request = new sfWebRequest($dispatcher);
      $request->setParameter('id', $cartId);
      var_dump($request->getParameter('id'));
      // $this->forward('cart', 'delete', $request ); 
    }

    // $this->redirect('orderDetail/index');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($order_detail = Doctrine_Core::getTable('OrderDetail')->find(array($request->getParameter('id'))), sprintf('Object order_detail does not exist (%s).', $request->getParameter('id')));
    $this->form = new OrderDetailForm($order_detail);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($order_detail = Doctrine_Core::getTable('OrderDetail')->find(array($request->getParameter('id'))), sprintf('Object order_detail does not exist (%s).', $request->getParameter('id')));
    $this->form = new OrderDetailForm($order_detail);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($order_detail = Doctrine_Core::getTable('OrderDetail')->find(array($request->getParameter('id'))), sprintf('Object order_detail does not exist (%s).', $request->getParameter('id')));
    $order_detail->delete();

    $this->redirect('orderDetail/index');
  }

  protected function processForm($request, sfForm $form)
  {
    $form->bind($request,[]);

    if ($form->isValid())
    {
      $order_detail = $form->save();

      // $this->redirect('orderDetail/index');
    }
  }

  public function executeConfirm(sfWebRequest $request){
    $productDetailJson = $request->getParameter('productDetail');
    $this->userId = $request->getParameter('userId');

    $this->products = json_decode($productDetailJson, true);

    $prices = [];
    $names = [];
    foreach($this->products as $product){
        $prices[] = $product['price'];
        $names[] = $product['name'];
    }
    $this->totalAmount = array_sum(array_map('intval', $prices));
    $this->productNames = $names;

    $this->customerName = '';
    if ($this->userId) {
      $this->names = Doctrine_Core::getTable('User')
      ->createQuery('u')
      ->where('u.id = ?', $this->userId)
      ->select('u.first_name, u.last_name')
      ->execute()
      ->toArray(); 

      if (!empty($this->names)) {
       $customerNamesArray = array_map(function($name) {
        return $name['first_name'] . ' ' . $name['last_name'];
       }, $this->names);
          
       $this->customerName = implode(' ', $customerNamesArray);
      }
    }
  }
}
