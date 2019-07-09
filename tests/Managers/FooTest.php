<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\FooFaker;
use Amethyst\Managers\FooManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class FooTest extends BaseTest
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
