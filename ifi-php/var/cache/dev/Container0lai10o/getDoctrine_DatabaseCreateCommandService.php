<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.database_create_command' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php';

$this->services['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand();

$instance->setName('doctrine:database:create');

return $instance;
