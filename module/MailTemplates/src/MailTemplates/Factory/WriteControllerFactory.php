<?php
namespace MailTemplates\Factory;

use MailTemplates\Controller\WriteTemplatecontroller;
use Zend\ServiceManager\{ServiceLocatorInterface, FactoryInterface};

class WriteControllerFactory implements FactoryInterface
{
  public function createService(ServiceLocatorInterface $serviceLocator)
  {
    $realServiceLocator = $serviceLocator->getServiceLocator();
    $templateService = $realServiceLocator->get('doctrine.entitymanager.orm_default');

    return new WriteTemplateController(
      $templateService
    );
  }
}
