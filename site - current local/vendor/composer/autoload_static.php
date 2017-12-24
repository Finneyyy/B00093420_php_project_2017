<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit717852c5582b587eb184d0ccf842dc37
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EFProject\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EFProject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'EFProject\\Database' => __DIR__ . '/../..' . '/src/Database.php',
        'EFProject\\MainController' => __DIR__ . '/../..' . '/src/MainController.php',
        'EFProject\\Product' => __DIR__ . '/../..' . '/src/Product.php',
        'EFProject\\ProductRepository' => __DIR__ . '/../..' . '/src/ProductRepository.php',
        'EFProject\\WebController' => __DIR__ . '/../..' . '/src/WebController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit717852c5582b587eb184d0ccf842dc37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit717852c5582b587eb184d0ccf842dc37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit717852c5582b587eb184d0ccf842dc37::$classMap;

        }, null, ClassLoader::class);
    }
}
