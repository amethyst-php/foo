<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Foo                 newEntity()
 * @method \Amethyst\Schemas\FooSchema          getSchema()
 * @method \Amethyst\Repositories\FooRepository getRepository()
 * @method \Amethyst\Serializers\FooSerializer  getSerializer()
 * @method \Amethyst\Validators\FooValidator    getValidator()
 * @method \Amethyst\Authorizers\FooAuthorizer  getAuthorizer()
 */
class FooManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.foo.data.foo';
}
