<?php
namespace MailPartials\Factory;

use MailPartials\Service\PartialService;
use Zend\ServiceManager\{
    FactoryInterface, ServiceLocatorInterface
};

class PartialServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        return new PartialService(
            $serviceLocator->get('MailPartials\Mapper\MailPartialMapperInterface')
        );
    }
}
