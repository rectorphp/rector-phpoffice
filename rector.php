<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(LevelSetList::UP_TO_PHP_80);
    $containerConfigurator->import(SetList::CODE_QUALITY);
    $containerConfigurator->import(SetList::DEAD_CODE);

    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::AUTO_IMPORT_NAMES, true);
};
