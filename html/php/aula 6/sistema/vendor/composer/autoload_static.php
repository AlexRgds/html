<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57d5e0fddab23a839b553c632d9cf5fe
{
    public static $classMap = array (
        'Cidade' => __DIR__ . '/../..' . '/Controller/Cidade.php',
        'Cliente' => __DIR__ . '/../..' . '/Controller/Cliente.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Conexao' => __DIR__ . '/../..' . '/Conexao/Conexao.php',
        'Estado' => __DIR__ . '/../..' . '/Controller/Estado.php',
        'Fornecedor' => __DIR__ . '/../..' . '/Controller/Fornecedor.php',
        'Pais' => __DIR__ . '/../..' . '/Controller/Pais.php',
        'Pessoa' => __DIR__ . '/../..' . '/Controller/Pessoa.php',
        'Produto' => __DIR__ . '/../..' . '/Controller/Produto.php',
        'Usuario' => __DIR__ . '/../..' . '/Controller/Usuario.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit57d5e0fddab23a839b553c632d9cf5fe::$classMap;

        }, null, ClassLoader::class);
    }
}
