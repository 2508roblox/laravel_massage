<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Page;
use App\Models\Category;
class ChiTietSanPham extends Component
{
    public $slug;
    public $product;
    public $descriptionHtml;
    public $quantity = 1; // Thuộc tính lưu trữ số lượng
    public $relatedProducts; // Thêm thuộc tính để lưu trữ sản phẩm liên quan

    use LivewireAlert;

    public function mount($slug)
    {
        $this->slug = $slug;

        // Truy vấn sản phẩm dựa trên slug
        $this->product = Product::where('slug', $slug)->firstOrFail();
        $this->descriptionHtml = Str::markdown($this->product->description);

        // Lấy danh mục của sản phẩm hiện tại
        $category_id = $this->product->category_id;

        // Lấy tối đa 12 sản phẩm ngẫu nhiên có is_active = 1 và thuộc cùng danh mục
        $this->relatedProducts = Product::where('is_active', 1)
            ->where('category_id', $category_id)
            ->where('id', '!=', $this->product->id) // Không lấy sản phẩm hiện tại
            ->inRandomOrder()
            ->limit(12)
            ->get();
    }

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

        return view('livewire.chi-tiet-san-pham', [
            'product' => $this->product,
            'descriptionHtml' => $this->descriptionHtml,
                 'categories' => $categories,
            'relatedProducts' => $this->relatedProducts,
             'pages' => $pages,// Truyền sản phẩm liên quan đến view
        ]);
    }

    // Phương thức tăng số lượng
    public function incrementQuantity()
    {
        $this->quantity++;
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemToCartWithQuantity($product_id, $this->quantity);

        // Update the cart count in the Navbar
        $this->dispatch('update-cart-count', [
            'total_count' => $total_count,
        ])->to(Navbar::class);

        // Show success alert
        $this->alert('success', 'Thêm sản phẩm thành công', [
            'position' => 'bottom-end',
            'timer' => 2000, // Optional: delay for the alert
        ]);

        // Dispatch a custom event to trigger the reload
         return redirect()->to('/gio-hang');
    }


}
