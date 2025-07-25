<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96a2b56d15ba518c92b904794aa2ba51
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cherif\\AppDaff\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cherif\\AppDaff\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96a2b56d15ba518c92b904794aa2ba51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96a2b56d15ba518c92b904794aa2ba51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96a2b56d15ba518c92b904794aa2ba51::$classMap;

        }, null, ClassLoader::class);
    }
}
