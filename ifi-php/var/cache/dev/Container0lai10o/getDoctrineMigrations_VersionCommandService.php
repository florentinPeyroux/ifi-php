<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.version_command' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
require_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/AbstractCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/VersionCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsVersionDoctrineCommand.php';

return $this->services['doctrine_migrations.version_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();
