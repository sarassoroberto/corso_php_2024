<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbf4171fe964987993d515428f928443
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\DevCoder\\Validator\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'D' => 
        array (
            'DevCoder\\Validator\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\DevCoder\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/devcoder-xyz/php-validator/tests',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'DevCoder\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/devcoder-xyz/php-validator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbf4171fe964987993d515428f928443::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbf4171fe964987993d515428f928443::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdbf4171fe964987993d515428f928443::$classMap;

        }, null, ClassLoader::class);
    }
}
