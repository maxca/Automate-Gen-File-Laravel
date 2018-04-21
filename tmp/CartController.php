<?php
namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\CartRequest;
use App\Http\Requests\Cart\CartGetRequest;
use App\Http\Requests\Cart\CartCreateRequest;
use App\Http\Requests\Cart\CartUpdateRequest;
use App\Http\Requests\Cart\CartDeleteRequest;
use App\Repository\Cart\CartRepository;

class CartController extends Controller
{

    protected $cart;

    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
    }
    public function createCart(CartCreateRequest $request)
    {
        $query = $this->cart->createData($request->all());
        return response()->json($query); 
    }
    public function getCartList(CartGetRequest $request)
    {
        $query = $this->cart->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteCart(CartDeleteRequest $request)
    {   
        $query = $this->cart->delete($request->all());
        return response()->json($query);
    }
    public function updateCart(CartUpdateRequest $request)
    {
        $query = $this->cart->updateData($request->all());
        return response()->json($query);   
    }

}
