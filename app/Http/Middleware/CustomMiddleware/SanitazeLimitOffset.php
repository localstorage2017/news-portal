<?php

namespace App\Http\Middleware\CustomMiddleware;

use Closure;
use Illuminate\Http\Request;

class SanitazeLimitOffset
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $input = $request->query();

        if (! isset($input['limit']) ) {
            $input['limit'] = 20;
        } else {
            $limit = (int) $input['limit'];
            $input['limit'] = $limit != 20 ? 20 : $limit;
        }

        if (! isset($input['offset']) ) {
            $input['offset'] = 0;
        } else {
            $offset = (int) $input['offset'];
            $input['offset'] = $offset % 20 ? ($offset - $offset % 20 + 20) : $offset;
        }

        $request->merge($input);

        return $next($request);
    }
}
