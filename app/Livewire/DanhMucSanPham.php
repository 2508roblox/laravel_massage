<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DanhMucSanPham extends Component
{
    use WithPagination;

    public $categorySlug;
    public $categoryName;
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

    public function mount($category)
    {
        $this->categorySlug = $category;

        $category = Category::where('slug', $this->categorySlug)->first();

        if ($category) {
            $this->categoryName = $category->name;
            $this->selectedCategory = $category->id;  // Set the category id as selectedCategory
        } else {
            abort(404, 'Category not found');
        }
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
        $queryParams = [
            'search' => $this->searchTerm,
            'category' => $this->selectedCategory,
            'brand' => $this->selectedBrand,
            'price_range' => $this->selectedPriceRange,
            'sort_by' => $this->sortBy,
        ];

        return redirect()->route('san-pham', $queryParams);
    }

    public function render()
    {
        $products = Product::where('is_active', 1)
            ->whereHas('category', function ($query) {
                $query->where('slug', $this->categorySlug);
            })
            ->paginate(16);

        $categories = Category::all();
        $brands = Brand::all();

        return view('livewire.danh-muc-san-pham', [
            'products' => $products,
            'categoryName' => $this->categoryName,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
}
