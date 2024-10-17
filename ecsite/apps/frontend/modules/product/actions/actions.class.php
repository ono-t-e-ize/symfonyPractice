<?php

/**
 * product actions.
 *
 * @package    ecsite
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        // すべてのプロダクトを取得
        $this->products = Doctrine_Core::getTable('Product')->createQuery('a')->execute();

    }

    public function executeShow(sfWebRequest $request)
    {
        // IDを基にプロダクトを取得
        $productId = $request->getParameter('id');
        $this->product = Doctrine_Core::getTable('Product')->find(array($productId));
        $this->forward404Unless($this->product);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new ProductForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new ProductForm();
        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $productId = $request->getParameter('id');
        $this->product = Doctrine_Core::getTable('Product')->find(array($productId));
        $this->forward404Unless($this->product, sprintf('Object product does not exist (%s).', $productId));
    
        $this->form = new ProductForm($this->product);
    
        if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid()) {
                $this->form->save();
                // 成功時のリダイレクト
                $this->redirect('product/index');
            }
        }
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductForm($product);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $product->delete();

        $this->redirect('product/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
            $product = $form->save();

            $this->redirect('product/edit?id=' . $product->getId());
        }
    }
}