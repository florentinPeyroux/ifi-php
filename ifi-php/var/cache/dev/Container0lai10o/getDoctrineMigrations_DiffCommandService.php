<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.diff_command' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
require_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/AbstractCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/GenerateCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/DiffCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php';

return $this->services['doctrine_migrations.diff_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();
