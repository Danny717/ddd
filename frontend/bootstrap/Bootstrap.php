<?php


namespace app\bootstrap;

use app\dispatchers\EventDispatcher;
use app\dispatchers\DummyEventDispatcher;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = \Yii::$container;

        $container->setSingleton(EventDispatcher::class, DummyEventDispatcher::class);
    }
}