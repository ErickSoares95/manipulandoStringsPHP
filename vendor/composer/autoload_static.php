<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2cec71fae2674c842b4a460dfb55d6bc
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ErikLira\\ManipulandoStrings\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ErikLira\\ManipulandoStrings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2cec71fae2674c842b4a460dfb55d6bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2cec71fae2674c842b4a460dfb55d6bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2cec71fae2674c842b4a460dfb55d6bc::$classMap;

        }, null, ClassLoader::class);
    }
}