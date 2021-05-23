<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    //
    public function index()
    {
        // 主（Area）　→　従（Shop）関係
        // Area(1)Tokyoに紐付いているお店の情報をとってくる
        $area_tokyo = Area::find(1)->shops;

        // 主（Area）　←　従（Shop）関係
        $shop = Shop::find(3)->area->name;

        // 多対多
        $shop_route = Shop::find(1)->routes()->get();
        dd($area_tokyo, $shop, $shop_route);
    }
}
