<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c5b16615fcf2d7b9f1e13c929f963e7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StrategyMode\\' => 13,
            'Singleton\\' => 10,
            'SimpleFactory\\' => 14,
        ),
        'O' => 
        array (
            'ObserverMode\\' => 13,
        ),
        'F' => 
        array (
            'Factory\\' => 8,
            'Facade\\' => 7,
        ),
        'D' => 
        array (
            'Decorator\\' => 10,
        ),
        'C' => 
        array (
            'Command\\' => 8,
        ),
        'A' => 
        array (
            'Adapter\\' => 8,
            'AbstractFactory\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StrategyMode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/StrategyMode',
        ),
        'Singleton\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Singleton',
        ),
        'SimpleFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/SimpleFactory',
        ),
        'ObserverMode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ObserverMode',
        ),
        'Factory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Factory',
        ),
        'Facade\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Facade',
        ),
        'Decorator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Decorator',
        ),
        'Command\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Command',
        ),
        'Adapter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Adapter',
        ),
        'AbstractFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/AbstractFactory',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c5b16615fcf2d7b9f1e13c929f963e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c5b16615fcf2d7b9f1e13c929f963e7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
