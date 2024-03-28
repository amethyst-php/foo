<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\BarFaker;
use Amethyst\Managers\BarManager;
use Amethyst\Tests\Base;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class BarTest extends Base
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = BarManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = BarFaker::class;
}
