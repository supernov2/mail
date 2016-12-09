<?php
return array(
    'service_manager' => [
        'factories' => [
          'MailPartials\Mapper\MailPartialMapperInterface' => 'MailPartials\Factory\SqlMapperFactory',
          'MailPartials\Service\MailPartialServiceInterface' => 'MailPartials\Factory\PartialServiceFactory',
        ],
    ],
    'controllers' => array(
        'factories' => [
          'MailPartials\Controller\MailPartials' => 'MailPartials\Factory\PartialsControllerFactory',
          ],
    ),
    'router' => array(
        'routes' => array(
            'partials' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/admin/mail/partials',
                    'defaults' => [
                      'controller' => 'MailPartials\Controller\MailPartials',
                      'action' => 'index',
                      ],
                ),
            ),
            'partials_add' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/admin/mail/partials/add',
                    'defaults' => [
                      'controller' => 'MailPartials\Controller\MailPartials',
                      'action' => 'index',
                      ],
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'MailPartials' => __DIR__ . '/../view',
        ),
    ),
    'module_layouts' => array(
        'MailPartials' => array(
            'default' => 'layout/admin',
        )
    ),
    'doctrine' => array(
            'driver' => array(
                'application_entities' => array(
                    'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                    'cache' => 'array',
                    'paths' => (__DIR__ . '/../src/MailPartials/Model')
                ),
                'orm_default' => array(
                    'drivers' => array(
                        'MailPartials\Model' => 'application_entities'
                    ),
                ),
            ),
        ),
);
