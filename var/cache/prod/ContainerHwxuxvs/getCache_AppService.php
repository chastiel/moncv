<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.app' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/FilesystemCommonTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/FilesystemTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/FilesystemAdapter.php';

$this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('wqRtfjXML1', 0, ($this->targetDirs[0].'/pools'));

$instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

return $instance;
