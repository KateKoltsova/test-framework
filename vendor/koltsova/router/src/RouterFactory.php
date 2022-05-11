<?php

namespace Koltsova\Router;

use Aigletter\Contracts\ComponentFactory;

class RouterFactory extends ComponentFactory
{
    protected static $router;

    protected function createConcreteComponent()
    {
        if (self::$router === null) {
            self::$router = new Router();
        }
        return self::$router;
    }
}