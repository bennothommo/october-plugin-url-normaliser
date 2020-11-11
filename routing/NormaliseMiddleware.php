<?php
namespace BennoThommo\UrlNormaliser\Routing;

use App;
use BennoThommo\UrlNormaliser\Classes\Normalise;
use Closure;

class NormaliseMiddleware
{
    public $ignore = [
        'backend/*'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Always allow backend to be accessed
        if (App::runningInBackend()) {
            return $next($request);
        }

        $originalUrl = preg_replace('/\?.*/', '', $request->getUri());
        $normalisedUrl = Normalise::url($originalUrl);

        if ($originalUrl !== $normalisedUrl) {
            return redirect()->away($normalisedUrl, 301);
        }

        return $next($request);
    }
}
