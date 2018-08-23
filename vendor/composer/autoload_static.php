<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2b2e1f5f5202c293e739311841aabbe
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
        'E' => 
        array (
            'ElephantHub\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'ElephantHub\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2b2e1f5f5202c293e739311841aabbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2b2e1f5f5202c293e739311841aabbe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}