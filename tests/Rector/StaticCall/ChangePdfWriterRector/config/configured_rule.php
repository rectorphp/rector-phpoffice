<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\PHPOffice\Rector\StaticCall\ChangePdfWriterRector;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(ChangePdfWriterRector::class);

    $services->set(RenameClassRector::class)
        ->configure([
            'PHPExcel_IOFactory' => 'PhpOffice\PhpSpreadsheet\IOFactory',
        ]);
};
