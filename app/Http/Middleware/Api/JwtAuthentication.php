<?php

namespace App\Http\Middleware\Api;

use Illuminate\Http\Request;
use Closure;
use Firebase\JWT\JWT;

class JwtAuthentication
{
    public function handle(Request $request, Closure $next)
    {
        if (!$header = $request->header('Authorization')) {
            return response()->json(array(
                'error' => 'Invalid Authentication'
            ), 401);
        }
        // Validate and check expiration of token
        $payload = JWT::decode(str_replace('Bearer ', '', $header), config('jwt.secret'), array('HS256'));
        if (!$payload || $payload->exp < time()) {
            return response()->json(array(
                'error' => 'Invalid Authentication'
            ), 401);
        }

        $request->shop = $payload->shop->id;

        return $next($request);
    }
}
