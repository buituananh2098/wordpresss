<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f0035c3602677ade12891e536c559b6
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTRT\\AdminNotices\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTRT\\AdminNotices\\' => 
        array (
            0 => __DIR__ . '/..' . '/wptrt/admin-notices/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f0035c3602677ade12891e536c559b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f0035c3602677ade12891e536c559b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
