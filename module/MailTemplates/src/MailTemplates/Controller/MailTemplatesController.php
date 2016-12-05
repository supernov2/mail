<?php

namespace MailTemplates\Controller;

use MailTemplates\Service\TemplateServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;

class MailTemplatesController extends AbstractActionController
{
    public function indexAction()
    {
        return ['templates' => []];
    }

    public function detailAction()
    {
      return [];
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /module-specific-root/skeleton/foo
        return array();
    }
}
