<?php

class userActions extends sfActions
{
    public function executeRegister(sfWebRequest $request)
    {
        $this->form = new UserForm();

        if ($request->isMethod('post'))
        {
            $this->form->bind($request->getParameter($this->form->getName()));

            if ($this->form->isValid())
            {
                $user = $this->form->save();
                $this->redirect('user/login');
            }
        }
    }

    public function executeLogin(sfWebRequest $request)
    {
        $this->form = new LoginForm();
    
        if ($request->isMethod('post'))
        {
            $email = $request->getParameter('email');
            $password = $request->getParameter('password');
    
            $user = Doctrine_Core::getTable('User')->findOneByEmail($email);
            if ($user && password_verify($password, $user->getPassword()))
            {
                $this->getUser()->setAttribute('user_id', $user->getId());
                $this->redirect('homepage');
            }
            else
            {
                $this->getUser()->setFlash('error', 'Invalid email or password.');
            }
        }
    }

}
