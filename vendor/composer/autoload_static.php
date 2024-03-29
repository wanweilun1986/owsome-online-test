<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit542740c7cda53d83e1902fb3597a52bf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyNamespace\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyNamespace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/MyNamespace',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit542740c7cda53d83e1902fb3597a52bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit542740c7cda53d83e1902fb3597a52bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit542740c7cda53d83e1902fb3597a52bf::$classMap;

        }, null, ClassLoader::class);
    }
}
