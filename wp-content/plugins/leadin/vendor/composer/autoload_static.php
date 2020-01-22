<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7658b5ac208194d8067a9c2ee6e5604d
{
    public static $files = array (
        '0923d66022feef1fa1cadca1328a2010' => __DIR__ . '/../..' . '/includes/utils/LeadinUtils.php',
        '68042a701fa26d0bc4015d90ed157a3d' => __DIR__ . '/../..' . '/includes/gutenberg/LeadinGutenberg.php',
        '30612ebe723fb599fbacf148ca496ccf' => __DIR__ . '/../..' . '/includes/connection/LeadinRegistration.php',
        '6690b3d16b04a436cdb392713bf44bc3' => __DIR__ . '/../..' . '/includes/connection/LeadinDisconnect.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leadin\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leadin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7658b5ac208194d8067a9c2ee6e5604d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7658b5ac208194d8067a9c2ee6e5604d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}