<?php
return array(
    'service_manager' => [
        'factories' => [
          'MailTemplates\Mapper\MailTemplateMapperInterface' =>
                        'MailTemplates\Factory\SqlMapperFactory',
          'MailTemplates\Service\MailTemplateServiceInterface' =>
                        'MailTemplates\Factory\TemplateServiceFactory',
        ],
    ],
    'controllers' => array(
        'factories' => [
          'MailTemplates\Controller\WriteTemplate' =>
                        'MailTemplates\Factory\WriteControllerFactory',
          'MailTemplates\Controller\MailTemplates' =>
                        'MailTemplates\Factory\TemplatesControllerFactory',
          ],
    ),
    'router' => array(
        'routes' => array(
            'mail' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/mail',
                    'defaults' => [
                      'controller' => 'MailTemplates\Controller\MailTemplates',
                      'action' => 'index',
                      ],
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'templates' => [
                      'type'    => 'Literal',
                      'options' => array(
                          'route'    => '/templates',
                          'defaults' => [
                            'controller' => 'MailTemplates\Controller\MailTemplates',
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
                                'controller' => 'MailTemplates\Controller\WriteTemplate',
                                'action' => 'add',
                                ],
                              ],
                          ],
                          'edit' => [
                            'type' => 'Segment',
                            'options' => [
                              'route' => '/edit/:id',
                              'defaults' => [
                                'controller' => 'MailTemplates\Controller\WriteTemplate',
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
                                'controller' => 'MailTemplates\Controller\MailTemplates',
                                'action' => 'index',
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
    
);
