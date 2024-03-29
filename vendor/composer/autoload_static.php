<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd68566e01b3fcf0ddda28125458a6bc2
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Libs\\' => 5,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_classes/Libs',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_classes/Helpers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd68566e01b3fcf0ddda28125458a6bc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd68566e01b3fcf0ddda28125458a6bc2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd68566e01b3fcf0ddda28125458a6bc2::$classMap;

        }, null, ClassLoader::class);
    }
}
