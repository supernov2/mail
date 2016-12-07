<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'MailPartials\Controller\Partials' => 'MailPartials\Controller\PartialsController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'partials' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/admin/mail/partials',
                    'defaults' => array(
                        '__NAMESPACE__' => 'MailPartials\Controller',
                        'controller'    => 'Partials',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
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
);
