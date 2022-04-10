<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{    
    use WithPagination;

    public function deleteProduct($id) {
        $product = Product::find($id);
        if($product->image)
        {
            // unlink('assets/images/products'.'/'.$product->image);
        }
        if($product->images)
        {
            $img = explode(",",$product->images);
            foreach($img as $imager)
            {
                unlink('assets/images/products'.'/'.$imager);
            }
        }
        $product->delete();
        session()->flash('message','Product has been Deleted successfully!');
    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component', ['products'=>$products])->layout('layouts.base');
    }
}
