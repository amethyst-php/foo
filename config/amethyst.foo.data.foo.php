<?php

return [
    'table'      => 'amethyst_foos',
    'comment'    => 'Foo',
    'model'      => Railken\Amethyst\Models\Foo::class,
    'schema'     => Railken\Amethyst\Schemas\FooSchema::class,
    'repository' => Railken\Amethyst\Repositories\FooRepository::class,
    'serializer' => Railken\Amethyst\Serializers\FooSerializer::class,
    'validator'  => Railken\Amethyst\Validators\FooValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\FooAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\FooFaker::class,
    'manager'    => Railken\Amethyst\Managers\FooManager::class,
];
