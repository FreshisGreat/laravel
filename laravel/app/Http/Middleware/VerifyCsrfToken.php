<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     * 排除不进行验证的CSRF请求
     * @var array
     */
    protected $except = [
        //
        '/test',
        '/match',
        '/admin/login',
        '/user/index'
    ];
}
