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

    $this->forward404Unless($cart = Doctrine_Core::getTable('Cart')->find(array($request->getParameter('id'))), sprintf('Object cart does not exist (%s).', $request->getParameter('id')));
    $cart->delete();

    $this->redirect('cart/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $cart = $form->save();

      $this->redirect('cart/edit?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
id='.$cart->getId());
    }
  }
}
