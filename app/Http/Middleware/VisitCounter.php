<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\VisitCount;

class VisitCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();
        $visitCount = VisitCount::where('page', $path)->first();

        if ($visitCount) {
            $visitCount->increment('count');
        } else {
            VisitCount::create(['page' => $path, 'count' => 1]);
        }

        return $next($request);
    }
}
