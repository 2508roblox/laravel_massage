<?php

namespace App\Livewire\Partials;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Page;

class Header extends Component
{
    public function render()
    {
           // Lấy tất cả các thương hiệu hoạt động với các cột cần thiết
        $brands = Brand::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->get();

        // Lấy tất cả các danh mục hoạt động với các cột cần thiết
            $categories = Category::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->with(['products' => function ($query) {
                $query->where('is_active', 1)    ->with('category', 'brand')
                    ->limit(8); // Lấy tối đa 8 sản phẩm cho mỗi danh mục
            }])
            ->get();

  $pages = Page::all();

             return view('livewire.partials.header', [
            'brands' => $brands,
            'categories' => $categories,
             'pages' => $pages,

        ]);
    }
}
