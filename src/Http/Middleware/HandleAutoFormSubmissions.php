<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleAutoFormSubmissions
{
    public function handle(Request $request, Closure $next)
    {
        // Check for token, ask database, handle submission
        return $next($request);
    }
}
