<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\PHPOffice\Rector\StaticCall\ChangeChartRendererRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(ChangeChartRendererRector::class);
};
