<?php

namespace App\Http\Middleware;

/*delete*/
//use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
/*add*/
use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use App\Restaurant;
//class VerifyCsrfToken extends BaseVerifier
class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /* Ratchanon Add for disable _token */
    public function handle($request, Closure $next)
    {
        // $acceptHeader = $request->header();
        // print_r($acceptHeader);
        // $data = Restaurant::GetRestaurant(1);
        // print_r($data);     
        // echo "test : >> <br>";
        // //print_r(Auth::guard('api')->id());
        // dd();

        if ( ! $request->is('api/*'))
        {
            return parent::handle($request, $next);
        }

        return $next($request);
    }
    
}
