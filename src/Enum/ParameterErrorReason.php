<?php
declare(strict_types=1);

namespace Szemul\RequestParameterErrorCollector\Enum;

enum ParameterErrorReason: string
{
    case MISSING       = 'missing';
    case DUPLICATE     = 'duplicate';
    case INVALID       = 'invalid';
    case MUST_BE_EMPTY = 'mustBeEmpty';
}
