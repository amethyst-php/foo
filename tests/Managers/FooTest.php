<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\FooFaker;
use Amethyst\Managers\FooManager;
use Amethyst\Tests\Base;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class FooTest extends Base
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = FooManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = FooFaker::class;
}
