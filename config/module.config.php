<?php

namespace Acdhch\Module\Configuration;

// Show PHP errors:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(- 1);

$config = [
    'vufind' => [
        'plugin_managers' => [
            'recordtab' => [
                'factories' => [
                    'Acdhch\RecordTab\Description' => '\Zend\ServiceManager\Factory\InvokableFactory',
                    'Acdhch\RecordTab\HoldingsILS' => 'VuFind\RecordTab\HoldingsILSFactory',
                    'Acdhch\RecordTab\Parts' => '\Zend\ServiceManager\Factory\InvokableFactory',
                    'Acdhch\RecordTab\Provenance' => 'Acdhch\RecordTab\ProvenanceFactory',
                    'Acdhch\RecordTab\StaffViewArray' => '\Zend\ServiceManager\Factory\InvokableFactory',
                    'Acdhch\RecordTab\StaffViewMARC' => '\Zend\ServiceManager\Factory\InvokableFactory'
                ],
                'aliases' => [
                    'description' => 'Acdhch\RecordTab\Description',
                    'holdingsils' => 'Acdhch\RecordTab\HoldingsILS',
                    'parts' => 'Acdhch\RecordTab\Parts',
                    'provenance' => 'Acdhch\RecordTab\Provenance',
                    'staffviewarray' => 'Acdhch\RecordTab\StaffViewArray',
                    'staffviewmarc' => 'Acdhch\RecordTab\StaffViewMARC'
                ]
            ],
            
        ]
    ],
    
];

$staticRoutes = [
    'Install/FixLoanHistoryTable', 'MyResearch/ChangeUserdata'
];

$routeGenerator = new \VuFind\Route\RouteGenerator();
$routeGenerator->addStaticRoutes($config, $staticRoutes);

return $config;
