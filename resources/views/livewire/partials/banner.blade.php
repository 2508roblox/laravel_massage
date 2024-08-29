@php
use App\Models\Slide;

// Truy vấn để lấy các slide đang hoạt động (is_active = true) và sắp xếp theo thứ tự sort_order
$slides = Slide::where('is_active', true)
                ->orderBy('sort_order')
                ->get();
@endphp

<section class="homepage-slider wrap-ratio aspect-ratio-96x25">
<div class="owl-carousel owl-theme">
    @foreach($slides as $slide)
        <div class="item wrap-ratio aspect-ratio-96x25">
            @if($slide->link)
                <a href="{{ $slide->link }}" title="{{ $slide->title ?? 'Trang chủ - Slider' }}">
                    <img src="{{ Storage::url($slide->image) }}" alt="{{ $slide->title ?? 'Slider' }}" width="1360" height="354">
                </a>
            @else
                <img src="{{ Storage::url($slide->image) }}" alt="{{ $slide->title ?? 'Slider' }}" width="1360" height="354">
            @endif
        </div>
    @endforeach
</div>
</section>
