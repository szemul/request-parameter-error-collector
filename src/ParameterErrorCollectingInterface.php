<?php
declare(strict_types=1);

namespace Szemul\RequestParameterErrorCollector;

use Szemul\RequestParameterErrorCollector\Enum\ParameterErrorReason;

interface ParameterErrorCollectingInterface
{
    public function addParameterError(string $name, ParameterErrorReason $errorReason): static;

    /** @return array<string,ParameterErrorReason> */
    public function getParameterErrors(): array;

    public function hasParameterErrors(): bool;
}
