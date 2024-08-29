<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\NewsItem;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Page;
use App\Models\Showroom;

#[Title('Home Page')]
class HomePage extends Component
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
                $query->where('is_active', 1)->with('category', 'brand')
                    ->limit(8); // Lấy tối đa 8 sản phẩm cho mỗi danh mục
            }])
            ->get();

        $pages = Page::all();
        $showrooms = Showroom::all();
        $news = NewsItem::orderBy('created_at', 'desc')->limit(5)->get();
        // Truyền dữ liệu vào view
        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories,
            'pages' => $pages,
            'news' => $news, // Truyền tin tức vào view
        'showrooms' => $showrooms,


        ]);
    }
}
