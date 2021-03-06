<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc7c439d43a74773e5d6ec6d91e9a27c3
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

        spl_autoload_register(array('ComposerAutoloaderInitc7c439d43a74773e5d6ec6d91e9a27c3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc7c439d43a74773e5d6ec6d91e9a27c3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc7c439d43a74773e5d6ec6d91e9a27c3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
