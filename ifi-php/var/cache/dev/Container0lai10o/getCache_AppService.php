<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.app' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
require_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
require_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';

$this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('snI8lKHKFw', 0, ($this->targetDirs[0].'/pools'));

$instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()) && false ?: '_'});

return $instance;
