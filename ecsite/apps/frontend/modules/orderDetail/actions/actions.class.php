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

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
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

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $order_detail = $form->save();

      $this->redirect('orderDetail/edit?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
id='.$order_detail->getId());
    }
  }
}
