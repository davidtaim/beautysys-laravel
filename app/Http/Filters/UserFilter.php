<?php

namespace App\Http\Filters;

use App\Http\Filters\ApiFilter;

class UserFilter extends ApiFilter
{
    protected array $safeParams = [
        'name' => ['eq', 'lk', 'sw', 'ew']
    ];
    protected array $columnMap = [];
    protected array $operatorMap = [
        'eq' => '=',
        'lk' => 'like',
        'sw' => 'like',
        'ew' => 'like'
    ];
}
