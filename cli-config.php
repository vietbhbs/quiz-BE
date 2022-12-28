<?php

require 'vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\Migrations\Configuration\Migration\PhpFile;

$config = new PhpFile('Migrations.php'); // Or use one of the Doctrine\Migrations\Configuration\Configuration\* loaders
$params = [
    'dbname' => 'quiz_api',
    'user' => 'root',
    'password' => '1',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];

$paths = [__DIR__.'/lib/MyProject/Entities'];
$isDevMode = true;

$ORMconfig = Setup::createAnnotationMetadataConfiguration([__DIR__. 'src/entity'], $isDevMode);
$entityManager = EntityManager::create($params, $ORMconfig);

return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));