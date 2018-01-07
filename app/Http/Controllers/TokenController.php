<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Firebase\JWT\JWT;

class TokenController extends Controller
{
    public function __invoke(Request $request)
    {
        $shop = Shop::where('myshopify_domain', $request->shop)->firstOrFail();
        // Let's generate a token
        $data = array(
            'iss' => time(),
            'exp' => strtotime(config('jwt.ttl')),
            'shop' => $shop
        );
        $token = JWT::encode($data, config('jwt.secret'));
        return response()->json(array(
            'access_token' => $token
        ));
    }
}
