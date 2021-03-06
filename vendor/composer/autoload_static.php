<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb72f55f82141434209012ca9e2ebaffc
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\Models\\' => 11,
            'src\\Interfaces\\' => 15,
            'src\\Classes\\' => 12,
        ),
        'W' => 
        array (
            'Wlf\\Database\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/painel/src/Models',
        ),
        'src\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/painel/src/Interfaces',
        ),
        'src\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/painel/src/Classes',
        ),
        'Wlf\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/painel/Wlf/Database',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb72f55f82141434209012ca9e2ebaffc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb72f55f82141434209012ca9e2ebaffc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
