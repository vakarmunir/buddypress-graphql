<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48e185559e18f787c53ebdb97f50c5ef
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BuddypressGraphQL\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BuddypressGraphQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48e185559e18f787c53ebdb97f50c5ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48e185559e18f787c53ebdb97f50c5ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
