<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId) {
        $product = Cart::instance('cart')->get($rowId);
        $quantity = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$quantity);
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function decreaseQuantity($rowId) {
        $product = Cart::instance('cart')->get($rowId);
        $quantity = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$quantity);
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function destroy($rowId) {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_message', 'Item has been removed');
    }
    public function destroyAll() {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function render()
    {
        $sale = Sale::find(1);
        return view('livewire.cart-component',['sale'=>$sale])->layout("layouts.base");;
    }
}
