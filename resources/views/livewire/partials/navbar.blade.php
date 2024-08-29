<nav class="navbar navbar-expand-xl">
    <div class="collapse navbar-collapse">
        <nav class="navbar   mx-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/gioi-thieu') }}" class="nav-link" title="Giới thiệu">Giới thiệu</a>
                </li>
             <!-- Danh mục Ghế Massage -->
<li class="nav-item dropdown">
    <a href="{{ url('/san-pham') }}" class="nav-link" title="Ghế Massage" data-toggle="dropdown">Ghế Massage</a>
    <ul class="dropdown-menu">
        @foreach($categories as $category)
            @if (str_contains($category->name, 'Ghế'))
                <li class="nav-item">
                    <a href="{{ url('/san-pham/' . $category->slug) }}" class="dropdown-item" title="{{ $category->name }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</li>

<!-- Danh mục Máy chạy bộ -->
<li class="nav-item dropdown">
    <a href="{{ url('/san-pham') }}" class="nav-link" title="Máy chạy bộ" data-toggle="dropdown">Máy chạy bộ</a>
    <ul class="dropdown-menu">
        @foreach($categories as $category)
            @if (str_contains($category->name, 'Máy chạy bộ'))
                <li class="nav-item">
                    <a href="{{ url('/san-pham/' . $category->slug) }}" class="dropdown-item" title="{{ $category->name }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</li>

                <li class="nav-item">
                    <a href="{{ url('/gio-hang') }}" class="nav-link" title="Giỏ hàng">Giỏ hàng</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/lien-he') }}" class="nav-link" title="Liên hệ">Liên hệ</a>
                </li>
            </ul>
        </nav>

    </div>
</nav>
