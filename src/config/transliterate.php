<?php

/** @noinspection PhpVoidFunctionResultUsedInspection */
return [
    /*
    |--------------------------------------------------------------------------
    | Default transliteration map
    |--------------------------------------------------------------------------
    |
    | This option specifies the transliteration map that will be used by default
    | if no explicit one will be provided during Transliteration::make() call.
    |
    | Supported: "common", "gost2000"
    |
    */
    'map' => 'common',

    /*
    |--------------------------------------------------------------------------
    | Custom transliteration maps
    |--------------------------------------------------------------------------
    |
    | You can create your custom transliteration maps or even override default.
    | Each map must be defined as "name" => "/absolute/path/to/map.php".
    |
    */
    'maps' => [
//        'ukraine' => dirname(__DIR__) . '/app/path/to/maps/ukraine.php',
    ],

    /*
    |--------------------------------------------------------------------------
    | Transformer callbacks
    |--------------------------------------------------------------------------
    |
    | It is possible to register your own transformer functions that will be
    | called on transliterated string. This is useful if you need to perform
    | the same actions on a result string every time.
    |
    | Since closures can't be serialized during "artisan config:cache" call,
    | use "\ElForastero\Transliterate\Closure::register"
    |
    */
    'transformers' => [
//        \ElForastero\Transliterate\Transformer::register(\Closure::fromCallable('trim'))
    ],
];
