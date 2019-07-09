<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\FoosController::class,
    'router'     => [
        'as'     => 'foo.',
        'prefix' => '/foos',
    ],
];
