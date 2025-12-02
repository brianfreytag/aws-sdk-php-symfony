<?php

namespace Syfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Aws\Sdk;
use function Symfony\Component\DependencyInjection\Loader\Configurator\param;

return static function (ContainerConfigurator $container): void {
    $container->parameters()
        ->set('aws_sdk.class', Sdk::class);

    $container->services()->set('aws_sdk')
        ->class(param('aws_sdk.class'))
        ->arg(0, []);
};
