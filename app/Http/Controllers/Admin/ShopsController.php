<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shop;
use Illuminate\Http\Request;
class ShopsController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('admin.shops.index', array(
            'shops' => $shops
        ));
    }
}
