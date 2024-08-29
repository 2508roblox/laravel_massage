<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Category;

class LienHe extends Component
{
    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();


        return view('livewire.lien-he', [
            'categories' => $categories,
        'brands' => $brands,
        ]);

    }
}
