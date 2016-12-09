<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'MailPartials\Mapper\MailPartialMapperInterface' => 'MailPartials\Factory\SqlMapperFactory',
            'MailPartials\Service\MailPartialServiceInterface' => 'MailPartials\Factory\PartialServiceFactory',
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'MailPartials\Controller\MailPartials' => 'MailPartials\Factory\PartialsControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'partials' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/admin/mail/partials',
                    'defaults' => array(
                        'controller' => 'MailPartials\Controller\MailPartials',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'add' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/add',
                            'defaults' => array(
                                'controller' => 'MailPartials\Controller\MailPartials',
                                'action' => 'add',
                            ),
                        ),
                    ),
                    'edit' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/edit/:id',
                            'defaults' => array(
                                'controller' => 'MailPartials\Controller\MailPartials',
                                'action' => 'edit',
                            ),
                            'constraints' => array(
                                'id' => '[1-9]\d*',
                            ),
                        ),
                    ),
                    'delete' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/delete/:id',
                            'defaults' => array(
                                'controller' => 'MailPartials\Controller\MailPartials',
                                'action' => 'delete',
                            ),
                            'constraints' => array(
                                'id' => '[1-9]\d*',
                            ),
                        ),
                    ),
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
