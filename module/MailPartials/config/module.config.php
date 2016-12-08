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
            'mail' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/admin/mail',
                    'defaults' => [
                      'controller' => 'MailPartials\Controller\MailPartials',
                      'action' => 'index',
                      ],
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'partials' => [
                      'type'    => 'Literal',
                      'options' => array(
                          'route'    => '/partials',
                          'defaults' => [
                            'controller' => 'MailPartials\Controller\MailPartials',
                            'action' => 'index',
                          ],
                      ),
                      'may_terminate' => true,
                      'child_routes' => [
                          'add' => [
                            'type' => 'Literal',
                            'options' => [
                              'route' => '/add',
                              'defaults' => [
                                'controller' => 'MailPartials\Controller\MailPartials',
                                'action' => 'add',
                                ],
                              ],
                          ],
                          'edit' => [
                            'type' => 'Segment',
                            'options' => [
                              'route' => '/edit/:id',
                              'defaults' => [
                                'controller' => 'MailPartials\Controller\MailPartials',
                                'action' => 'edit',
                                ],
                                'constraints' => [
                                    'id' => '[1-9]\d*',
                                ],
                              ],
                          ],
                          'delete' => [
                            'type' => 'Segment',
                            'options' => [
                              'route' => '/delete/:id',
                              'defaults' => [
                                'controller' => 'MailPartials\Controller\MailPartials',
                                'action' => 'delete',
                                ],
                                'constraints' => [
                                    'id' => '[1-9]\d*',
                                ],
                              ],
                            ],
                        ],
                    ],
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'MailTemplates' => __DIR__ . '/../view',
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
