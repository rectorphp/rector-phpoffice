<?php

declare(strict_types=1);

use Rector\PHPOffice\Rector\StaticCall\ChangePdfWriterRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(ChangePdfWriterRector::class);

    $services->set(RenameClassRector::class)
        ->configure([
            'PHPExcel_IOFactory' => 'PhpOffice\PhpSpreadsheet\IOFactory',
        ]);
};
