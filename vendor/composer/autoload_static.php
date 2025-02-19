<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a383ed86dbc14b0be4fe727f1976f55
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aiconec\\Aichat\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aiconec\\Aichat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a383ed86dbc14b0be4fe727f1976f55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a383ed86dbc14b0be4fe727f1976f55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a383ed86dbc14b0be4fe727f1976f55::$classMap;

        }, null, ClassLoader::class);
    }
}
