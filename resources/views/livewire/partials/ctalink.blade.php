@php
use App\Models\CtaLink;

$ctaLinks = CtaLink::where('is_active', true)
                    ->orderBy('sort_order')
                    ->get();
@endphp

<div class="cta-fixed">
<div class="inner">
    @foreach($ctaLinks as $link)
        <a href="{{ $link->link }}" title="{{ $link->title }}" class="item" rel="nofollow" target="_blank">
            <img width="125" height="33" src="{{ Storage::url($link->image) }}" alt="{{ $link->title }}">
            <div class="cta-text">
                {{ $link->title }}
                {!! $link->bold_text ? "<strong>{$link->bold_text}</strong> " : '' !!}
            </div>
        </a>
    @endforeach
</div>
</div>
<style>
.cta-fixed .inner {
    display: flex;
    flex-direction: row; /* Các item sẽ nằm trong một cột */
    gap: 10px; /* Khoảng cách giữa các item */
    justify-content: center;
}

.cta-fixed .item {
    display: flex;
    align-items: center; /* Hàng ngang căn giữa theo chiều dọc */
    padding: 10px;
    background-color: #f5f5f5;
    border-radius: 5px;
    text-decoration: none;
    color: #000; /* Màu chữ */
    transition: background-color 0.3s;
}

.cta-fixed .item:hover {
    background-color: #e0e0e0; /* Hiệu ứng hover */
}

.cta-fixed .item img {
    height: 40px; /* Đặt chiều cao ảnh */
    margin-right: 10px; /* Khoảng cách giữa ảnh và chữ */
}

.cta-fixed .cta-text {
    display: flex;
    FONT-SIZE: small;
    flex-direction: column;
    justify-content: center;
}
.cta-fixed .cta-text strong{
  font-size: 1.3rem;
}



</style>
