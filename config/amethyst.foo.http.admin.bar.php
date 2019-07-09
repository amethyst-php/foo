<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\BarsController::class,
    'router'     => [
        'as'     => 'bar.',
        'prefix' => '/bars',
    ],
];
