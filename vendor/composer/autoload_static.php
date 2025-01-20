<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c27ba0e921657eaaac3ee055e1212f1
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c27ba0e921657eaaac3ee055e1212f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c27ba0e921657eaaac3ee055e1212f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c27ba0e921657eaaac3ee055e1212f1::$classMap;

        }, null, ClassLoader::class);
    }
}
