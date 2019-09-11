<?php


spl_autoload_register(function ($class_name) {
    require __DIR__ . '/src/' . $class_name . '.php';
});

$config = new \Migration\MigrationConfig();
$config->set('migration_path', './mocks');
$storage = new \Migration\FileStorage();
$generator = new \Migration\SimpleGenerator();

$migration = new \Migration\MigrationRunner($config, $generator, $storage);

$migration->generate();

$migration->migrate();
