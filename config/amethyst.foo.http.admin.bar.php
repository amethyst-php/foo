<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\BarsController::class,
    'router'     => [
        'as'     => 'bar.',
        'prefix' => '/bars',
    ],
];
