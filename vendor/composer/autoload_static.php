<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6dbbd9bed8bacd4164c817b60dc19361
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Service' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'M' => 
        array (
            'Model' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'C' => 
        array (
            'Controller' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6dbbd9bed8bacd4164c817b60dc19361::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6dbbd9bed8bacd4164c817b60dc19361::$classMap;

        }, null, ClassLoader::class);
    }
}
