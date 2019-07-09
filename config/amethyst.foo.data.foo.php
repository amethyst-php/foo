<?php

return [
    'table'      => 'amethyst_foos',
    'comment'    => 'Foo',
    'model'      => Amethyst\Models\Foo::class,
    'schema'     => Amethyst\Schemas\FooSchema::class,
    'repository' => Amethyst\Repositories\FooRepository::class,
    'serializer' => Amethyst\Serializers\FooSerializer::class,
    'validator'  => Amethyst\Validators\FooValidator::class,
    'authorizer' => Amethyst\Authorizers\FooAuthorizer::class,
    'faker'      => Amethyst\Fakers\FooFaker::class,
    'manager'    => Amethyst\Managers\FooManager::class,
];
