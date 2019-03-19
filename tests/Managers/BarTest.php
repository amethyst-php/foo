<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\BarFaker;
use Railken\Amethyst\Managers\BarManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class BarTest extends BaseTest
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
