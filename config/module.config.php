<?php
return array(
    'router' => array(
        'routes' => array(
            'libra-locale' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/libra-locale',
                ),
                'child_routes' => array(
                    'switch' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/switch',
                            'defaults' => array(
                                //'module'     => 'libra-locale',
                                'controller' => 'libra-locale/locale',
                                'action'     => 'switch',
                            ),
                        ),
                        'may_terminate' => true,
                    ),
                ),
            ),
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'libra-locale/locale'           => 'LibraLocale\Controller\LocaleController',
            //for module listner __NAMESPASE__ param:
            'LibraLocale\Controller\Locale' => 'LibraLocale\Controller\LocaleController',
        ),
    ),

    //defaults
    'libra_locale' => array(
        'locales' => array(
            'en' => 'en-US',
        ),
        'default' => 'en',
    ),
    'redirect_code' => '302',
);