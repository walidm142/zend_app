<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Form\LoginForm;


class AdminController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new LoginForm();
        $form->get('submit')->setValue('Sign In');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }
    }

     public function loginAction()
    {
    	return $this->redirect()->toRoute('album');
    }

    
}
