<?php

return [
    'enabled'     => true,
    'controller'  => Railken\Amethyst\Http\Controllers\Admin\FoosController::class,
    'router'      => [
        'as'        => 'foo.',
        'prefix'    => '/foos',
    ],
];
