<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCartRequest;
use App\Models\CartItem;
use App\Models\ProductSku;
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

    public function index(Request $request)
    {
        $cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();

        return view('cart.index', ['cartItems' => $cartItems]);
    }

    public function remove(ProductSku $product_sku, Request $request)
    {
        $request->user()->cartItems()->where('product_sku_id', $product_sku->id)->delete();

        return [];
    }
}
