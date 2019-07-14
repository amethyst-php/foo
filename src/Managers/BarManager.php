<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Bar                 newEntity()
 * @method \Amethyst\Schemas\BarSchema          getSchema()
 * @method \Amethyst\Repositories\BarRepository getRepository()
 * @method \Amethyst\Serializers\BarSerializer  getSerializer()
 * @method \Amethyst\Validators\BarValidator    getValidator()
 * @method \Amethyst\Authorizers\BarAuthorizer  getAuthorizer()
 */
class BarManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.foo.data.bar';
}
