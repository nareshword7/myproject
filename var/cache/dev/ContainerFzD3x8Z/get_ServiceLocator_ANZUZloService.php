<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.aNZUZlo' shared service.

return $this->privates['.service_locator.aNZUZlo'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('projectMasterRepository' => function (): \App\Repository\ProjectMasterRepository {
    return ($this->privates['App\Repository\ProjectMasterRepository'] ?? $this->load('getProjectMasterRepositoryService.php'));
}));
