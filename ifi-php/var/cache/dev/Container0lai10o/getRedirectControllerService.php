<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

return $this->services['Symfony\Bundle\FrameworkBundle\Controller\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, 80, 443);