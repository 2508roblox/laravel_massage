<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Page;

class SanPham extends Component
{
    use WithPagination;

    public $selectedCategory = null;
    public $selectedBrand = null;
    public $searchTerm = '';
    public $sortBy = 'best_selling';
    public $selectedPriceRange = '';

    protected $queryString = [
        'selectedCategory' => ['except' => ''],
        'selectedBrand' => ['except' => ''],
        'searchTerm' => ['except' => ''],
        'sortBy' => ['except' => 'best_selling'],
        'selectedPriceRange' => ['except' => ''],
    ];

    public function mount()
    {
        // Khi component được khởi tạo, kiểm tra và gán giá trị từ query string
        $this->selectedCategory = request()->query('category', $this->selectedCategory);
        $this->selectedBrand = request()->query('brand', $this->selectedBrand);
        $this->searchTerm = request()->query('search', $this->searchTerm);
        $this->sortBy = request()->query('sort_by', $this->sortBy);
        $this->selectedPriceRange = request()->query('price_range', $this->selectedPriceRange);
    }

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function updatedSelectedCategory()
    {
        $this->resetPage();
    }

    public function updatedSelectedBrand()
    {
        $this->resetPage();
    }

    public function updatedSortBy()
    {
        $this->resetPage();
    }

    public function updatedSelectedPriceRange()
    {
        $this->resetPage();
    }

    public function applyFilters()
    {
        // Chuẩn bị dữ liệu lọc để đưa vào query string
        $queryParams = [
            'search' => $this->searchTerm,
            'category' => $this->selectedCategory,
            'brand' => $this->selectedBrand,
            'price_range' => $this->selectedPriceRange,
            'sort_by' => $this->sortBy,
        ];

        // Điều hướng lại trang với query string
        return redirect()->route('san-pham', $queryParams);
    }

    public function render()
    {
        $products = Product::where('is_active', 1)
            ->when($this->selectedCategory, function ($query) {
                return $query->where('category_id', $this->selectedCategory);
            })
            ->when($this->selectedBrand, function ($query) {
                return $query->where('brand_id', $this->selectedBrand);
            })
            ->when($this->searchTerm, function ($query) {
                return $query->where('name', 'like', '%' . $this->searchTerm . '%');
            })
            ->when($this->selectedPriceRange, function ($query) {
                $priceRange = explode('-', $this->selectedPriceRange);
                return $query->whereBetween('price', [intval($priceRange[0]) * 1000000, intval($priceRange[1]) * 1000000]);
            })
            ->when($this->sortBy, function ($query) {
                switch ($this->sortBy) {
                    case 'price_asc':
                        return $query->orderBy('price', 'asc');
                    case 'price_desc':
                        return $query->orderBy('price', 'desc');
                    default:
                        return $query;
                }
            })
            ->with('category', 'brand')
            ->paginate(5);

        $categories = Category::all();
        $brands = Brand::all();
        $pages = Page::all();

        return view('livewire.san-pham', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'pages' => $pages,
        ]);
    }
}
