<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88cd3ed1ddb0101a208d48a4fb1863c7
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit88cd3ed1ddb0101a208d48a4fb1863c7::$classMap;

        }, null, ClassLoader::class);
    }
}
