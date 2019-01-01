<?php

namespace Railken\Amethyst\Managers;

use Railken\Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

class FooManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.foo.data.foo';
}
