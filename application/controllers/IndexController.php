<?php

require_once APPLICATION_PATH . '/models/Auth.php';

/**
 * Class IndexController
 */
class IndexController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $p = $this->_getParam('m');

        if ($p)
            $this->view->message = $p;
        else
            $this->view->message = "no message";
    }

    public function aboutAction()
    {

    }

}