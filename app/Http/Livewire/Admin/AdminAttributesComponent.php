<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAttributesComponent extends Component
{

    public function deleteAttribute($attribute_id)
    {
        $pattributes = ProductAttribute::find($attribute_id);
        $pattributes->delete();
        session()->flash('message','attribute has been deleted successfully.');
    }

    public function render()
    {
        $pattributes = ProductAttribute::paginate(10);
        return view('livewire.admin.admin-attributes-component',['pattributes'=>$pattributes])->layout('layouts.base');
    }
}
