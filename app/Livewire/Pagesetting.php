<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Category;
use Livewire\Component;

class Pagesetting extends Component
{
    public $page;
    public function mount($slug)
    {
        // Tìm trang dựa trên slug
        $this->page = Page::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        $pages = Page::all();
 $categories = Category::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->with(['products' => function ($query) {
                $query->where('is_active', 1)
                    ->limit(8); // Lấy tối đa 8 sản phẩm cho mỗi danh mục
            }])
            ->get();
        return view('livewire.pagesetting', [
            'page' => $this->page,
        'pages' => $pages,
            'categories' => $categories,

        ]);
    }
}
