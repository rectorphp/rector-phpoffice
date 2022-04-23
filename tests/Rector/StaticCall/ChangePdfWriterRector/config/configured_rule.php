<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPOffice\Rector\StaticCall\ChangePdfWriterRector;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ChangePdfWriterRector::class);

    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        'PHPExcel_IOFactory' => 'PhpOffice\PhpSpreadsheet\IOFactory',
    ]);
};
