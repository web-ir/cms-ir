<?php

return array(
     'navigation' => array(
         'default' => array(
             array(
             	'label' => 'Logowanie',
             	'route' => 'login',
                'pages' => array(
                    array(
                        'label' => 'Rejestacja',
                        'route' => 'registration',
                    )
                ),
             ),
             array(
                 'label' => 'Dashboard',
                 'route' => 'dashboard',
                 'class' => 'fa fa-home'
             ),
             array(
                 'label' => 'Użytkownicy',
                 'route' => 'fake',
                 'class' => 'fa fa-users',
                 'pages' => array(
                     array(
                         'label' => 'Dodaj nowy',
                         'route' => 'users-create',
                     ),
                     array(
                         'label' => 'Lista użytkowników',
                         'route' => 'users-list',
                     )
                 ),
             ),
         ),
     ),
     'service_manager' => array(
         'factories' => array(
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
         ),
     ),
);