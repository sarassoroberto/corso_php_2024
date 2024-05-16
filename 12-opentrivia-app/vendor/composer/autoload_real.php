<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInitdbf4171fe964987993d515428f928443
=======
class ComposerAutoloaderInit4974c937ebe7c8086148b947672fa3a5
>>>>>>> 98bf91aa8bd1a73b06baa6e76a41f8dc56075999
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInitdbf4171fe964987993d515428f928443', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdbf4171fe964987993d515428f928443', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdbf4171fe964987993d515428f928443::getInitializer($loader));
=======
        spl_autoload_register(array('ComposerAutoloaderInit4974c937ebe7c8086148b947672fa3a5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4974c937ebe7c8086148b947672fa3a5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4974c937ebe7c8086148b947672fa3a5::getInitializer($loader));
>>>>>>> 98bf91aa8bd1a73b06baa6e76a41f8dc56075999

        $loader->register(true);

        return $loader;
    }
}
