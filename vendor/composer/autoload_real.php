<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita6fa47cbdb113ff3ee90f64370c16d4c
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

        spl_autoload_register(array('ComposerAutoloaderInita6fa47cbdb113ff3ee90f64370c16d4c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita6fa47cbdb113ff3ee90f64370c16d4c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita6fa47cbdb113ff3ee90f64370c16d4c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}