<?php

use Rector\TomajNetteApi\Rules\PostJsonKeyToJsonInputParamChangeRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(PostJsonKeyToJsonInputParamChangeRector::class);
};
