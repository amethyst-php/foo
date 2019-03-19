<?php

return [
    'table'      => 'amethyst_bars',
    'comment'    => 'Bar',
    'model'      => Railken\Amethyst\Models\Bar::class,
    'schema'     => Railken\Amethyst\Schemas\BarSchema::class,
    'repository' => Railken\Amethyst\Repositories\BarRepository::class,
    'serializer' => Railken\Amethyst\Serializers\BarSerializer::class,
    'validator'  => Railken\Amethyst\Validators\BarValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\BarAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\BarFaker::class,
    'manager'    => Railken\Amethyst\Managers\BarManager::class,
];
