<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => [
        'log',
        'app\bootstrap\Bootstrap',
    ],
    /*'container' => [
        'singletons' => [
            'app\dispatchers\EventDispatcher' => ['app\dispatcher\DummyEventDispatcher'],
        ]
    ],*/
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
