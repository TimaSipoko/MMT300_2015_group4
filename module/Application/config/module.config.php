<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'static_salt' => 'aFGQ475SDsdfsaf2342',
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'about' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/about',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'about',
                    ),
                ),
                'child_routes' => array(
                    'story' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/story',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'story',
                            ),
                        ),
                    ),
                    'mission' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/mission',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'mission',
                            ),
                        ),
                    ),
                    'team' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/team',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'team',
                            ),
                        ),
                    ),
                ),
            ),
            'getinvolved' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/getinvolved',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'getinvolved',
                    ),
                ),
                'child_routes' => array(
                    'volunteer' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/volunteer',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'volunteer',
                            ),
                        ),
                    ),
                    'programs' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/programs',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'programs',
                            ),
                        ),
                    ),
                    'donate' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/donate',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'donate',
                            ),
                        ),
                    ),
                ),
            ),
            'store' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/store',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'store',
                    ),
                ),
            ),
            'family' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/family',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'family',
                    ),
                ),
                'child_routes' => array(
                    'donors' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/donors',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'donors',
                            ),
                        ),
                    ),
                    'partners' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/partners',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'partners',
                            ),
                        ),
                    ),
                    'gallery' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/gallery',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'gallery',
                            ),
                        ),
                    ),
                     
                     'advisors' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/advisors',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'advisors',
                            ),
                        ),
                    ),
                ),
            ),
            'contact' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/contact',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'contact',
                    ),
                ),
            ),
            
            'contactus' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/contactus',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'contactus',
                    ),
                ),
            ),
            'register' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Registration',
                        'action' => 'register',
                    ),
                ),
            ),
            'login' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/login',
                    'defaults' => array(
                        'controller' => 'Application\Controller\index',
                        'action' => 'login',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    //all routes registered here should be literal routes
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'HOME',
                'route' => 'home',
            ),
            array(
                'label' => 'ABOUT US',
                'route' => 'about',
                'action' => 'about',
            ),
            array(
                'label' => 'GALLERY',
                'route' => 'gallery',
                'pages' => array(
                    array(
                        'label' => 'PHOTOS',
                        'route' => 'photos',
                        'action' => 'photos',
                    ),
                    array(
                        'label' => 'Videos',
                        'route' => 'videos',
                        'action' => 'videos',
                    )
                ),
            ),
            array(
                'label' => 'OUR PROJECTS',
                'route' => 'projects',
                'action' => 'projects',
            ),
            array(
                'label' => 'VOLUNTEERING',
                'route' => 'volunteering',
                'action' => 'volunteering',
            ),
            array(
                'label' => 'DONATE',
                'route' => 'donate',
                'action' => 'donate',
            ),
            array(
                'label' => 'CONTACT',
                'route' => 'contact',
                'action' => 'contact',
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
            'Zend\Authentication\AuthenticationService' => 'my_auth_service',
        ),
        'invokables' => array(
            'my_auth_service' => 'Zend\Authentication\AuthenticationService',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Registration' => 'Application\Controller\RegistrationController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
