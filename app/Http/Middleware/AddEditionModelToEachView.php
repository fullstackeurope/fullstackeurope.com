<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

final class AddEditionModelToEachView
{
    public function handle(Request $request, Closure $next): Response
    {
        $edition = $request->route('edition');

        View::share('edition', $edition);

        return $next($request);
    }
}
