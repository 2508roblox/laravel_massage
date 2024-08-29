<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Brand;
use App\Models\Category;
use App\Models\NewsItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsItem::orderBy('created_at', 'desc')->paginate(10); // Sử dụng phân trang nếu có nhiều tin tức

        return view('tintuc', compact('news'));
    }

    // Hiển thị chi tiết một bài viết tin tức dựa trên slug
    public function show($slug)
    {
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
    $news = NewsItem::orderBy('created_at', 'desc')->limit(5)->get();
        $article = NewsItem::where('slug', $slug)->firstOrFail();

        return view('tin-chi-tiet', compact('article','categories'));
    }
}
