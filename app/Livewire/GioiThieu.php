<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Page;
use App\Models\Showroom;
use Livewire\Component;

class GioiThieu extends Component
{
    public function render()
    {
        $categories = Category::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->with(['products' => function ($query) {
                $query->where('is_active', 1)
                    ->limit(8); // Lấy tối đa 8 sản phẩm cho mỗi danh mục
            }])
            ->get();

        $pages = Page::all();

        // Lấy tất cả showroom
        $showrooms = Showroom::all();

        // Truyền dữ liệu vào view
        return view('livewire.gioi-thieu', [
            'pages' => $pages,
            'categories' => $categories,
            'showrooms' => $showrooms,
        ]);
    }
}
