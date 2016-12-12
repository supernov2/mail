<?php
namespace MailPartials\Factory;

use MailPartials\Controller\MailPartialsController;
use Zend\ServiceManager\{
    ServiceLocatorInterface, FactoryInterface
};

class PartialsControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $partialService = $realServiceLocator->get('doctrine.entitymanager.orm_default');
        return new MailPartialsController(
            $partialService
        );
    }
}
