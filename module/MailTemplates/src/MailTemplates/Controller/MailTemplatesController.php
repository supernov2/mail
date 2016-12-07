<?php

namespace MailTemplates\Controller;

use MailTemplates\Service\TemplateServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;

class MailTemplatesController extends AbstractActionController
{
    protected $mailTemplateService;

    public function __construct(TemplateServiceInterface $mailTemplateService)
    {

      $this->mailTemplateService = $mailTemplateService;
    }
    public function indexAction()
    {

        return ['templates' => $this->mailTemplateService->findAllTemplates()];
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
