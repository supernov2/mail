<?php
namespace MailTemplates\Controller;

use MailTemplates\Service\TemplateServiceInterface;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;

class WriteTemplateController extends AbstractActionController
{
  protected $mailTemplateService;

  public function __construct($mailTemplateService)
  {

    $this->mailTemplateService = $mailTemplateService;
  }
  public function addAction()
  {
    return [];
  }

  public function editAction()
  {
    return [];
  }
}
