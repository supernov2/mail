<?php
namespace MailPartials\Factory;

use Zend\ServiceManager\{FactoryInterface, ServiceLocatorInterface};
use Zend\Stdlib\Hydrator\ClassMethods;
use MailPartials\Model\Partial;
use MailPartials\Mapper\SqlMapper;

class SqlMapperFactory implements FactoryInterface
{
  public function createService(ServiceLocatorInterface $serviceLocator)
  {
    
    return new SqlMapper(
        $serviceLocator->get('Zend\Db\Adapter\Adapter'),
        new ClassMethods(false),
        new Partial()
      );
  }
}
