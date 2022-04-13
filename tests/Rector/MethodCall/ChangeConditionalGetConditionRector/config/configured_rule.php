<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\PHPOffice\Rector\MethodCall\ChangeConditionalGetConditionRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(ChangeConditionalGetConditionRector::class);
};
