<?php

namespace App\Livewire;
use App\Models\Category;
use App\Models\Page;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Address;
use Livewire\Component;

class TransactionSearch extends Component
{
    public $phone;
    public $orders = [];

    public function searchOrders()
    {
        // Query to find orders based on the phone number
        $this->orders = Order::whereHas('addresses', function ($query) {
                $query->where('phone', $this->phone);
            })
            ->with('orderItems') // Load associated order items
            ->get();
    }

    public function render()
    {
          $categories = Category::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->with([
                'products' => function ($query) {
                    $query->where('is_active', 1)->limit(8); // Lấy tối đa 8 sản phẩm cho mỗi danh mục
                },
            ])
            ->get();
        $pages = Page::all();
        return view('livewire.transaction-search', [
            'orders' => $this->orders,
             'categories' => $categories,
            'pages' => $pages,
        ]);
    }
}
