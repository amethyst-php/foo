<?php

return [
    'table'      => 'bar',
    'comment'    => 'Bar',
    'model'      => Amethyst\Models\Bar::class,
    'schema'     => Amethyst\Schemas\BarSchema::class,
    'repository' => Amethyst\Repositories\BarRepository::class,
    'serializer' => Amethyst\Serializers\BarSerializer::class,
    'validator'  => Amethyst\Validators\BarValidator::class,
    'authorizer' => Amethyst\Authorizers\BarAuthorizer::class,
    'faker'      => Amethyst\Fakers\BarFaker::class,
    'manager'    => Amethyst\Managers\BarManager::class,
];
