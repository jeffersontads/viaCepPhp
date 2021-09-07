<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8450bed9a82c290bc5aeca0894896a23
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8450bed9a82c290bc5aeca0894896a23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8450bed9a82c290bc5aeca0894896a23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8450bed9a82c290bc5aeca0894896a23::$classMap;

        }, null, ClassLoader::class);
    }
}
