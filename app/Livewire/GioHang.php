<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Page;
use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class GioHang extends Component
{
    use LivewireAlert;

    public $name;
    public $address;
    public $email;
    public $phone;
    public $notes;

    public $cart_items = [];
    public $grand_total;

    // Thông tin mắt
    public $right_sphere = 0;
    public $right_cylinder = 0;
    public $right_axis = 0;
    public $right_add = 0;

    public $left_sphere = 0;
    public $left_cylinder = 0;
    public $left_axis = 0;
    public $left_add = 0;

    public function removeCartItem($product_id)
    {
        $this->cart_items = CartManagement::removeCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->dispatch('update-cart-count', [
            'total_count' => count($this->cart_items),
        ])->to(Navbar::class);
        $this->alert('success', 'Xoá giỏ hàng thành công', [
            'position' => 'bottom-end'
        ]);
    }

    public function clearCart()
    {
        CartManagement::clearCartItems();
        $this->cart_items = [];
        $this->grand_total = 0;
        $this->dispatch('update-cart-count', [
            'total_count' => 0,
        ])->to(Navbar::class);
        $this->alert('success', 'Giỏ hàng đã được xóa sạch', [
            'position' => 'bottom-end'
        ]);
    }

    public function incrementQuantityToCartItem($product_id)
    {
        $this->cart_items = CartManagement::incrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function decrementQuantityToCartItem($product_id)
    {
        $this->cart_items = CartManagement::decrementQuantityToCartItem($product_id);
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function mount()
    {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
    }

    public function updateCartItemQuantity($product_id, $quantity)
    {
        if (is_numeric($quantity) && $quantity > 0) {
            $this->cart_items = CartManagement::updateQuantityCartItem($product_id, $quantity);
            $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        }
    }

    public function render()
    {
        $categories = Category::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->with([
                'products' => function ($query) {
                    $query->where('is_active', 1)->limit(8);
                },
            ])
            ->get();
        $pages = Page::all();
        return view('livewire.gio-hang', [
            'categories' => $categories,
            'pages' => $pages,
        ]);
    }

    public function submitOrder()
    {
        $this->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        // Tạo đơn hàng
        $order = \App\Models\Order::create([
            'user_id' => auth()->id() ?? 1,
            'grand_total' => $this->grand_total,
            'payment_method' => 'cod',
            'payment_status' => 'pending',
            'status' => 'new',
            'currency' => 'USD',
            'shipping_amount' => 0,
            'shipping_method' => 'standard',
            'notes' => $this->notes,
        ]);

        // Lưu địa chỉ
        $address = $order->address()->create([
            'first_name' => $this->name,
            'last_name' => $this->email,
            'street_address' => $this->address,
            'phone' => $this->phone,
            'city' => $this->notes,
        ]);

        // Lưu các sản phẩm trong đơn hàng
        $orderItems = [];
        foreach ($this->cart_items as $item) {
            $orderItem = \App\Models\OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'unit_amount' => $item['unit_amount'],
                'total_amount' => $item['total_amount'],
            ]);
            $orderItems[] = $orderItem;
        }

        // Ghi dữ liệu vào Google Sheets
        $googleSheetService = new \App\Services\GoogleSheetService();
        $googleSheetService->saveOrderToSheet($order, $address, $orderItems);

        // Clear giỏ hàng và reset các giá trị form
        CartManagement::clearCartItems();
        $this->reset(['name', 'address', 'email', 'phone', 'notes']);
        $this->cart_items = [];
        $this->grand_total = 0;

        // Hiển thị thông báo thành công
        $this->alert('success', 'Đơn hàng đã được gửi thành công và lưu vào Google Sheets!', [
            'position' => 'bottom-end'
        ]);
    }



}
