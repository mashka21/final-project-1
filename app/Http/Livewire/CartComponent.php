<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId) {
        $product = Cart::get($rowId);
        $quantity = $product->qty + 1;
        Cart::update($rowId,$quantity);
    }

    public function decreaseQuantity($rowId) {
        $product = Cart::get($rowId);
        $quantity = $product->qty - 1;
        Cart::update($rowId,$quantity);
    }

    public function destroy($rowId) {
        Cart::remove($rowId);
        session()->flash('success_message', 'Item has been removed');
    }
    public function destroyAll() {
        Cart::destroy();
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $sale = Sale::find(1);
        return view('livewire.cart-component',['sale'=>$sale])->layout("layouts.base");;
    }
}
