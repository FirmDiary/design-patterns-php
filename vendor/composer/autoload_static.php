<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c5b16615fcf2d7b9f1e13c929f963e7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Template\\' => 9,
        ),
        'S' => 
        array (
            'Strategy\\' => 9,
            'Singleton\\' => 10,
            'SimpleFactory\\' => 14,
        ),
        'O' => 
        array (
            'Observer\\' => 9,
        ),
        'I' => 
        array (
            'Iterator\\' => 9,
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
            'Composite\\' => 10,
            'Command\\' => 8,
        ),
        'A' => 
        array (
            'Adapter\\' => 8,
            'AbstractFactory\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Template\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Template',
        ),
        'Strategy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Strategy',
        ),
        'Singleton\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Singleton',
        ),
        'SimpleFactory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/SimpleFactory',
        ),
        'Observer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Observer',
        ),
        'Iterator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Iterator',
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
        'Composite\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Composite',
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
