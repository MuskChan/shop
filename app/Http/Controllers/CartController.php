<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCartRequest;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(AddCartRequest $request)
    {
        $user = $request->user();
        $skuId = $request->input('sku_id');
        $amount = $request->input('amount');

        // 从数据库中查询该商品是否已经在购物车中
        if ($car = $user->cartItems()->where('product_sku_id', $skuId)->first()) {
            // 如果存在则直接叠加商品数量
            $car->update([
                'amount' => $car->amount + $amount,
            ]);
        } else {
            // 否则创建一个新的购物车记录
            $car = new CartItem(['amount' => $amount]);
            $car->user()->associate($user);
            $car->productSku()->associate($skuId);
            $car->save();
        }

        return [];
    }
}
