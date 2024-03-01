<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'deal-to-notify/*',
        'task-to-notify/*',
        'smart-process/nvk/task/checklist',
        'calendar/change',
        'deposit/*',
        'coins/*',
        'webhook/',
        'timeline/comment/add*',
        'season-ticket*',
        'resources*',
        'events*',
        'login*',
        'boiler_deals*',
        'repeat_deals*',
        'deals_for_call*',
        'squash*',
        'bath-complex*',
        'loyalty*'
    ];
}
