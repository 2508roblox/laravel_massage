<div>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Katie">
        <meta name="keywords" content="Katie">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="{{ 'assets/images/favicon.png' }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ 'assets/images/favicon.png' }}" type="image/x-icon">
        <title>TRA CỨU THÔNG TIN HÓA ĐƠN</title><!-- Favicon icon-->
        <link rel="icon" href="{{ 'assets/images/favicon.png' }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ 'assets/images/favicon.png' }}" type="image/x-icon">
        <!-- Google Font Outfit-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
        <!-- Font Awesome-->
        <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/fontawesome.css' }}"><!-- Iconsax icon-->
        <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/iconsax.css' }}"><!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" id="rtl-link" href="{{ 'assets/css/vendors/bootstrap.css' }}">
        <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/swiper-slider/swiper-bundle.min.css' }}">
        <link rel="stylesheet" type="text/css" href="{{ 'assets/css/vendors/toastify.css' }}">
        <link rel="stylesheet" type="text/css" href="{{ 'assets/css/style.css' }}">
        <script defer src="{{ asset('assets/css/landing_page.js') }}"></script>
        <script defer src="{{ asset('assets/css/style.js') }}"></script>
        <link href="{{ 'assets/css/landing_page.css' }}" rel="stylesheet">
        <link href="{{ 'assets/css/style.css' }}" rel="stylesheet">
    </head>

    <body>
        <div class="tap-top">
            <div><i class="fa-solid fa-angle-up"></i></div>
        </div><span class="cursor"><span class="cursor-move-inner"><span class="cursor-inner"></span></span><span
                class="cursor-move-outer"><span class="cursor-outer"></span></span></span>
        <header style="
                position: sticky;
                top: 0;
                background: white;
                z-index: 100;
            ">
            <div class="top_header">
                <p>Free Coupe Code: Summer Sale On Selected items Use:<span>NEW 26</span><a
                        href="collection-left-sidebar.html"> SHOP NOW</a></p>
            </div>
            <div class="custom-container container header-1">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="mobile-fix-option">
                            <ul>
                                <li> <a href="{{url('/')}}"><i class="iconsax" data-icon="home-1"></i>Trang chủ</a>
                                </li>
                                <li><a href="{{url('/san-pham')}}"><i class="iconsax"
                                            data-icon="search-normal-2"></i>Tìm kiếm</a></li>
                                <li><a href="{{url('/gio-hang')}}"><i class="iconsax" data-icon="shopping-cart"></i>Giỏ
                                        hàng</a></li>
                            </ul>
                        </div>
                        <div class="offcanvas offcanvas-start" id="staticBackdrop" data-bs-backdrop="static"
                            tabindex="-1" aria-labelledby="staticBackdropLabel">
                            <div class="offcanvas-header">
                                <h3 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h3><button
                                    class="btn-close" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div></div>I will not close if you click outside of me.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="main-menu"> <a class="brand-logo" href="{{ url('/') }}"> <img
                                    class="img-fluid for-light" src="{{asset('assets/images/logo.svg')}}"
                                    alt="logo" /><img class="img-fluid for-dark"
                                    src="{{asset('assets/images/logo.svg')}}" alt="logo" /></a>
                            <nav id="main-nav">

                                <ul class="nav-menu sm-horizontal theme-scrollbar" id="sm-horizontal">
                                    <li class="mobile-back" id="mobile-back">Trở lại<i
                                            class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></li>

                                    <!-- Mục Sản phẩm (Bộ sưu tập) -->
                                    <li>
                                        <a class="nav-link" href="#">Bộ sưu tập <span><i
                                                    class="fa-solid fa-angle-down"></i></span></a>
                                        <ul class="nav-submenu">
                                            @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ url('category/'.$category->slug) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li><a class="nav-link" href="{{ url('san-pham') }}">Sản phẩm</a></li>

                                    <!-- Mục Dịch Vụ -->
                                    <li><a class="nav-link" href="#">Dịch vụ tròng</a></li>

                                    <!-- Mục Về Chúng Tôi -->
                                    <li><a class="nav-link" href="{{ url('gioi-thieu') }}">Về chúng tôi</a></li>
                                    <li class="nav-item" style="display: flex;align-items: center;">
                                        <a class="nav-item-highlight" href="{{ url('gioi-thieu') }}">ĐÀO TẠO NGHỀ
                                            MẮT KÍNH</a>
                                    </li>
                                    <style>
                                        .nav-item-highlight {
                                            text-transform: uppercase;
                                            background-image: linear-gradient(-225deg,
                                                    #231557 0%,
                                                    #44107a 29%,
                                                    #ff1361 67%,
                                                    #fff800 100%);
                                            background-size: auto auto;
                                            background-clip: border-box;
                                            background-size: 200% auto;
                                            color: #fff;
                                            background-clip: text;
                                            text-fill-color: transparent;
                                            -webkit-background-clip: text;
                                            -webkit-text-fill-color: transparent;
                                            animation: textclip 2s linear infinite;
                                            display: inline-block;
                                            font-size: 16px;
                                        }

                                        .hotline-number .phone-part {
                                            margin-right: 2px;
                                            /* Điều chỉnh khoảng cách giữa các phần số */
                                        }

                                        @keyframes textclip {
                                            to {
                                                background-position: 200% center;
                                            }
                                        }
                                    </style>


                                    <style>
                                        .social-media-menu {
                                            list-style-type: none;
                                            padding: 0;
                                            margin: 0;
                                            display: flex;

                                            /* Space between icons */
                                            justify-content: center;
                                            /* Center the icons horizontally */
                                        }

                                        .social {
                                            display: flex;
                                            align-items: center;
                                            text-align: center;
                                        }

                                        .social-link {
                                            display: flex;
                                            align-items: center;
                                            text-decoration: none;
                                            background: rgb(97, 147, 255);
                                            padding: .2rem;
                                            border-radius: 100%;
                                            display: flex;
                                            width: 25px;
                                            justify-content: center;
                                            display: flex;
                                            height: 25px;
                                            color: inherit;
                                            font-size: 16px;
                                            /* Adjust size as needed */
                                        }

                                        .social-link i {
                                            font-size: 16px;
                                            /* Icon size */
                                        }

                                        .social-link img {
                                            vertical-align: middle;
                                        }

                                        .social-text {
                                            font-size: 16px;
                                            /* Text size */
                                        }

                                        .facebook .social-link {
                                            color: #3b5998;
                                            /* Facebook color */
                                        }

                                        .zalo .social-link {
                                            color: #0076ff;
                                            /* Zalo color */
                                        }

                                        .youtube .social-link {
                                            color: #ff0000;
                                            /* YouTube color */
                                        }

                                        .facebook .social-link:hover,
                                        .zalo .social-link:hover,
                                        .youtube .social-link:hover {
                                            opacity: 0.7;
                                            /* Slight opacity on hover */
                                        }
                                    </style>
                                </ul>
                            </nav>
                            <style>
                                #main-nav li a {
                                    font-weight: bold;
                                    text-transform: uppercase;
                                }
                            </style>
                            <div class="sub_header">
                                <div class="toggle-nav" id="toggle-nav">
                                    <i class="fa-solid fa-bars-staggered sidebar-bar"></i>
                                </div>
                                <ul class="justify-content-end">
                                    <li class="onhover-div">
                                        <a href="#"></a>
                                        <div class="onhover-show-div user">
                                            <ul>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="sign-up.html">Register</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/bao-hanh" title="Tra cứu đơn hàng" wire:navigate>
                                            <i class="iconsax" data-icon="search-normal-2"></i> Tra cứu đơn hàng
                                        </a>
                                    </li>
                                    <li class="onhover-div shopping-cart">
                                        <a class="p-0" href="#" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            <a href="/gio-hang" title="Xem giỏ hàng" wire:navigate>
                                                <i class="iconsax pe-2" data-icon="basket-2"></i> Giỏ hàng
                                            </a>
                                        </a>
                                    </li>
                                    <!-- New Order Tracking Icon -->

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main id="main" class="">

            <div id="content" role="main">
                <div class="container">
                    <div class="block_zoom">
                        <div class="box-baohanh">
                            <h1 class="bh_title text-center">TRA CỨU THÔNG TIN HÓA ĐƠN</h1>
                            <p class="text-center"><label for="lname">Nhập số điện thoại hóa đơn:(ví dụ:
                                    0962968453)</label></p>
                            <form wire:submit.prevent="searchOrders" class="d-flex flex-column align-items-center">
                                <div class="mb-3 w-50">
                                    <input type="text" id="lname" wire:model="phone" name="masobh" class="form-control"
                                        placeholder="Nhập số điện thoại của bạn...">
                                </div>
                                <div class="input-sub">
                                    <input type="submit" value="Kiểm tra" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        @if($orders)
                        <div class="box-baohanh-info mt-4">
                            <h2 class="text-center">Danh sách đơn hàng</h2>
                            @foreach($orders as $order)
                            <div class="order mt-4 p-4 border rounded shadow-sm bg-light">
                                <div class="order-header d-flex justify-content-between align-items-center">
                                    <h4 class="order-id text-primary mb-3">Mã đơn hàng: {{ $order->id }}</h4>
                                    <h5 class="order-date text-muted">{{ $order->created_at->format('d/m/Y H:i:s') }}
                                    </h5>
                                </div>
                                <div class="order-status">
                                    <p><strong>Trạng thái đơn hàng:</strong>
                                        <span class="
                                            @if($order->status == 'new') badge-secondary
                                            @elseif($order->status == 'processing') badge-warning
                                            @elseif($order->status == 'shipped') badge-info
                                            @elseif($order->status == 'delivered') badge-success
                                            @elseif($order->status == 'cancelled') badge-danger
                                            @endif">
                                            @if($order->status == 'new') Mới
                                            @elseif($order->status == 'processing') Đang xử lý
                                            @elseif($order->status == 'shipped') Đã giao
                                            @elseif($order->status == 'delivered') Đã hoàn thành
                                            @elseif($order->status == 'cancelled') Đã hủy
                                            @endif
                                        </span>
                                    </p>
                                </div>
                                <div class="order-info">
                                    <p><strong>Địa chỉ nhận:</strong> {{ $order->address->street_address }}</p>
                                    <p><strong>Số điện thoại:</strong> {{ $order->address->phone }}</p>
                                </div>
                                <div class="order-items">
                                    <h5 class="text-secondary mt-3">Sản phẩm:</h5>
                                    <ul class="list-group">
                                        @foreach($order->orderItems as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a
                                                href="{{ '/san-pham/' .  $item->product->category->slug . '/' . $item->product->slug }}">
                                                {{ $item->product->name }}
                                            </a>
                                            <span>{{ $item->quantity }} x {{ number_format($item->product->price, 0,
                                                ',', '.') }} VND</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="order-total mt-3">
                                    <h5 class="text-danger">Tổng tiền:
                                        {{ number_format($order->orderItems->sum(function($item) {
                                        return $item->quantity * $item->product->price;
                                        }), 0, ',', '.') }} VND
                                    </h5>
                                </div>
                                <!-- Thêm thông số mắt -->
                                <div class="order-eye-info mt-4">
                                    <h5 class="text-secondary">Thông số mắt:</h5>
                                    <p><strong>Mắt phải:</strong></p>
                                    <ul>
                                        <li>Sphere: {{ $order->right_sphere }}</li>
                                        <li>Cylinder: {{ $order->right_cylinder }}</li>
                                        <li>Axis: {{ $order->right_axis }}</li>
                                        <li>Add: {{ $order->right_add }}</li>
                                    </ul>
                                    <p><strong>Mắt trái:</strong></p>
                                    <ul>
                                        <li>Sphere: {{ $order->left_sphere }}</li>
                                        <li>Cylinder: {{ $order->left_cylinder }}</li>
                                        <li>Axis: {{ $order->left_axis }}</li>
                                        <li>Add: {{ $order->left_add }}</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="box-baohanh-info mt-4 text-center">
                            <p>Không tìm thấy đơn hàng nào.</p>
                        </div>
                        @endif




                    </div>
                </div>
            </div>
        </main>


        <style type="text/css">
            .block_zoom {
                padding: 70px 0;
            }

            .input-sub {
                margin-top: 10px;
            }
        </style>
        </main>
        <footer class="footer-layout-img">
            <section class="section-b-space footer-1">
                <div class="custom-container container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-content">
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}">
                                        <img class="img-fluid" src="{{ asset('assets/images/logo.svg') }}"
                                            alt="Footer Logo">
                                    </a>
                                </div>
                                <ul>
                                    @foreach ($pages as $page)
                                    @if ($page->slug === 'dia-chi')
                                    <li>
                                        <i class="iconsax" data-icon="location"></i>
                                        <h6>{!! $page->content !!}</h6>
                                    </li>
                                    @elseif ($page->slug === 'so-dien-thoai')
                                    <li>
                                        <i class="iconsax" data-icon="phone-calling"></i>
                                        <h6>{!! $page->content !!}</h6>
                                    </li>
                                    @elseif ($page->slug === 'email')
                                    <li>
                                        <i class="iconsax" data-icon="mail"></i>
                                        <h6>{!! $page->content !!}</h6>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-content">
                                <div class="footer-title d-md-block">
                                    <h5>Thông Tin</h5>
                                    <ul class="footer-details accordion-hidden">
                                        @foreach ($pages as $page)
                                        <li><a class="nav" href="{{ route('pagesetting', ['slug' => $page->slug]) }}">{{
                                                $page->title }}</a>
                                        </li>
                                        @endforeach
                                    </ul>



                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-content">
                                <div class="footer-title d-md-block">
                                    <h5>Kết Nối</h5>
                                    <ul class="footer-details accordion-hidden">
                                        <li><a class="nav" href="#">Facebook</a></li>
                                        <li><a class="nav" href="#">Instagram</a></li>
                                        <li><a class="nav" href="mailto:martian@martian.vn">Email Chúng Tôi</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="sub-footer">
                <div class="custom-container container">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="footer-end">
                                <h6>© Copyright MARTIAN – All Rights Reserved – Powered by MARTIAN</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal theme-modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body modal1">
                        <div class="custom-container container">
                            <div class="row">
                                <div class="col-12 px-0">
                                    <div class="modal-bg addtocart"><button class="btn-close" type="button"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div class="d-flex"><a href="#"><img class="img-fluid blur-up lazyload pro-img"
                                                    src="{{ asset('assets/images/modal/0.jpg') }}" alt=""></a>
                                            <div class="add-card-content align-self-center text-center"><a href="#">
                                                    <h6><i class="fa-solid fa-check"> </i>Item <span>men full
                                                            sleeves</span><span> successfully added to your Cart</span>
                                                    </h6>
                                                </a>
                                                <div class="buttons"><a class="view-cart btn btn-solid"
                                                        href="cart.html">Your cart</a><a class="checkout btn btn-solid"
                                                        href="check-out.html">Check
                                                        out</a><a class="continue btn btn-solid"
                                                        href="{{ url('/') }}">Continue shopping</a></div>
                                                <div class="upsell_payment"><img class="img-fluid blur-up lazyload"
                                                        src="{{ asset('assets/images/payment_cart.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-upsell">
                                        <h5>Products Loved by Our Customers</h5><svg>
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#main-line') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="card-img"> <img src="{{ asset('assets/images/modal/1.jpg') }}"
                                            alt="user"><a href="#">
                                            <h6>Woven Jacket</h6>
                                            <p>$25</p>
                                        </a></div>
                                    <div class="card-img"> <img src="{{ asset('assets/images/modal/2.jpg') }}"
                                            alt="user"><a href="#">
                                            <h6>Printed Dresses</h6>
                                            <p>$25</p>
                                        </a></div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="card-img"> <img src="{{ asset('assets/images/modal/3.jpg') }}"
                                            alt="user"><a href="#">
                                            <h6>Woven Jacket</h6>
                                            <p>$25</p>
                                        </a></div>
                                    <div class="card-img"> <img src="{{ asset('assets/images/modal/4.jpg') }}"
                                            alt="user"><a href="#">
                                            <h6>Printed Dresses</h6>
                                            <p>$25</p>
                                        </a></div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="card-img"> <img src="{{ asset('assets/images/modal/5.jpg') }}"
                                            alt="user"><a href="#">
                                            <h6>Woven Jacket</h6>
                                            <p>$25</p>
                                        </a></div>
                                    <div class="card-img"> <img src="{{ asset('assets/images/modal/6.jpg') }}"
                                            alt="user"><a href="#">
                                            <h6>Printed Dresses</h6>
                                            <p>$25</p>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end shopping-details" id="offcanvasRight" tabindex="-1"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title" id="offcanvasRightLabel">Shopping Cart</h4><button class="btn-close"
                    type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body theme-scrollbar">
                <ul class="offcanvas-cart">
                    <li> <a href="#"> <img src="{{ asset('assets/images/cart/1.jpg') }}" alt=""></a>
                        <div>
                            <h6 class="mb-0">Shirts Men's Clothing</h6>
                            <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                        id="total">105</span></span></p>
                            <div class="btn-containter">
                                <div class="btn-control"><button class="btn-control__remove"
                                        id="btn-remove">&minus;</button>
                                    <div class="btn-control__quantity">
                                        <div id="quantity-previous">2</div>
                                        <div id="quantity-current">3</div>
                                        <div id="quantity-next">4</div>
                                    </div><button class="btn-control__add" id="btn-add">+</button>
                                </div>
                            </div>
                        </div><i class="iconsax delete-icon" data-icon="trash"></i>
                    </li>
                    <li> <a href="#"> <img src="{{ asset('assets/images/cart/2.jpg') }}" alt=""></a>
                        <div>
                            <h6 class="mb-0">Shirts Men's Clothing</h6>
                            <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                        id="total1">105</span></span></p>
                            <div class="btn-containter">
                                <div class="btn-control"><button class="btn-control__remove"
                                        id="btn-remove1">&minus;</button>
                                    <div class="btn-control__quantity">
                                        <div id="quantity1-previous">2</div>
                                        <div id="quantity1-current">3</div>
                                        <div id="quantity1-next">4</div>
                                    </div><button class="btn-control__add" id="btn-add1">+</button>
                                </div>
                            </div>
                        </div><i class="iconsax delete-icon" data-icon="trash"></i>
                    </li>
                    <li> <a href="#"> <img src="{{ asset('assets/images/cart/3.jpg') }}" alt=""></a>
                        <div>
                            <h6 class="mb-0">Shirts Men's Clothing</h6>
                            <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                        id="total2">105</span></span></p>
                            <div class="btn-containter">
                                <div class="btn-control"><button class="btn-control__remove"
                                        id="btn-remove2">&minus;</button>
                                    <div class="btn-control__quantity">
                                        <div id="quantity2-previous">2</div>
                                        <div id="quantity2-current">3</div>
                                        <div id="quantity2-next">4</div>
                                    </div><button class="btn-control__add" id="btn-add2">+</button>
                                </div>
                            </div>
                        </div><i class="iconsax delete-icon" data-icon="trash"></i>
                    </li>
                    <li> <a href="#"> <img src="{{ asset('assets/images/cart/4.jpg') }}" alt=""></a>
                        <div>
                            <h6 class="mb-0">Shirts Men's Clothing</h6>
                            <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                        id="total3">105</span></span></p>
                            <div class="btn-containter">
                                <div class="btn-control"><button class="btn-control__remove"
                                        id="btn-remove3">&minus;</button>
                                    <div class="btn-control__quantity">
                                        <div id="quantity3-previous">2</div>
                                        <div id="quantity3-current">3</div>
                                        <div id="quantity3-next">4</div>
                                    </div><button class="btn-control__add" id="btn-add3">+</button>
                                </div>
                            </div>
                        </div><i class="iconsax delete-icon" data-icon="trash"></i>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-footer">
                <p>Spend <span>$ 14.81 </span>more and enjoy <span>FREE SHIPPING!</span></p>
                <div class="footer-range-slider">
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="46"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-striped progress-bar-animated theme-default"
                            style="width: 46%"></div>
                    </div>
                </div>
                <div class="price-box">
                    <h6>Total :</h6>
                    <p>$ 49.59 USD</p>
                </div>
                <div class="cart-button"> <a class="btn btn_outline" href="cart.html"> View Cart</a><a
                        class="btn btn_black" href="check-out.html"> Checkout</a></div>
            </div>
        </div>
        <div class="offcanvas offcanvas-top search-details" id="offcanvasTop" tabindex="-1"
            aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header"><button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                    aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div>
            <div class="offcanvas-body theme-scrollbar">
                <div class="container">
                    <h3>What are you trying to find?</h3>
                    <div class="search-box"> <input type="search" name="text" placeholder="I'm looking for…"><i
                            class="iconsax" data-icon="search-normal-2"></i></div>
                    <h4>Popular Searches</h4>
                    <ul class="rapid-search">
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Jeans
                                Women</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Blazer Women</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Jeans
                                Men</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Blazer Men</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>T-Shirts Men</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Shoes
                                Men</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>T-Shirts Women</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Bags</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Sneakers Women</a></li>
                        <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                    data-icon="search-normal-2"></i>Dresses</a></li>
                    </ul>
                    <h4>You Might Like</h4>
                    <div class="row gy-4 ratio_square-2 preemptive-search">
                        <div class="col-xl-2 col-sm-4 col-6">
                            <div class="product-box-6">
                                <div class="img-wrapper">
                                    <div class="product-image"><a href="product.html"> <img class="bg-img"
                                                src="{{ asset('assets/images/product/product-2/blazers/1.jpg') }}"
                                                alt="product"></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div><a href="product.html">
                                            <h6> Women's Stylish Top</h6>
                                        </a>
                                        <p>$50.00 </p>
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                            <li>4+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 col-6">
                            <div class="product-box-6">
                                <div class="img-wrapper">
                                    <div class="product-image"><a href="product.html"> <img class="bg-img"
                                                src="{{ asset('assets/images/product/product-2/blazers/2.jpg') }}"
                                                alt="product"></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div><a href="product.html">
                                            <h6> Women's Stylish Top</h6>
                                        </a>
                                        <p>$95.00 <del>$140.00</del></p>
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                            <li>3+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 col-6">
                            <div class="product-box-6">
                                <div class="img-wrapper">
                                    <div class="product-image"><a href="product.html"> <img class="bg-img"
                                                src="{{ asset('assets/images/product/product-2/blazers/3.jpg') }}"
                                                alt="product"></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div><a href="product.html">
                                            <h6> Women's Stylish Top</h6>
                                        </a>
                                        <p>$80.00 <del>$140.00</del></p>
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                            <li>4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 col-6">
                            <div class="product-box-6">
                                <div class="img-wrapper">
                                    <div class="product-image"><a href="product.html"> <img class="bg-img"
                                                src="{{ asset('assets/images/product/product-2/blazers/4.jpg') }}"
                                                alt="product"></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div><a href="product.html">
                                            <h6> Women's Stylish Top</h6>
                                        </a>
                                        <p>$90.00 </p>
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                            <li>2+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 col-6">
                            <div class="product-box-6">
                                <div class="img-wrapper">
                                    <div class="product-image"><a href="product.html"> <img class="bg-img"
                                                src="{{ asset('assets/images/product/product-2/blazers/5.jpg') }}"
                                                alt="product"></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div><a href="product.html">
                                            <h6> Women's Stylish Top</h6>
                                        </a>
                                        <p>$180.00 <del>$140.00</del></p>
                                        <ul class="rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            <li><i class="fa-regular fa-star"></i></li>
                                            <li>4+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 col-6">
                            <div class="product-box-6">
                                <div class="img-wrapper">
                                    <div class="product-image"><a href="product.html"> <img class="bg-img"
                                                src="{{ asset('assets/images/product/product-2/blazers/6.jpg') }}"
                                                alt="product"></a>
                                    </div>
                                </div>
                                <div class="product-detail"><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$120.00 </p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="title-box"> <img src="{{ asset('assets/images/other-img/cookie.png') }}" alt="">
                <h3>Cookies Consent</h3>
            </div>
            <div class="info">
                <p>We use cookies to improve our site and your shopping experience. By continuing to browse our site you
                    accept our cookie policy.</p>
            </div>
            <div class="buttons"><button class="button btn btn_outline sm" id="acceptBtn">Accept</button><button
                    class="button btn btn_black sm">Decline</button></div>
        </div>



        <script type="text/javascript">
            $(document).ready(function() {
                LoadBigCart();
            });

            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }

            function UpdateCart(i) {
                var val = $("input[data-id='" + i + "']").val();
                if (!isNumber(val)) {
                    return;
                }
                $.ajax({
                    url: '/Tool/UpdateShopCart.aspx',
                    data: 'num=' + i + "&val=" + val,
                    dataType: 'text',
                    type: 'GET',
                    cache: false,
                    success: function(result) {
                        if (result == "1") {
                            LoadBigCart();
                        }
                    }
                });
            }
        </script>
        <input type="hidden" id="jsLienhe" name="jsLienhe"
            value='[{"SetId":1,"SettingId":"Hotline","SettingValue":"0938 114 419","SettingContent":""},{"SetId":2,"SettingId":"Email","SettingValue":"trongthuycomputer@gmail.com","SettingContent":""},{"SetId":4,"SettingId":"Địa chỉ","SettingValue":"SỐ 38, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM","SettingContent":"<div class=\"footer-info\">            <div class=\"company\">VI TÍNH TRỌNG THỦY</div>\n\n            <p>SỐ 38, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM</p>\n\n                <p>Tel: 0938 114 419</p>\n\n                <p>Email: trongthuycomputer@gmail.com</p>\n\n        </div>"},{"SetId":5,"SettingId":"Địa chỉ liên hệ ở footer","SettingValue":"VI TÍNH TRỌNG THỦY","SettingContent":"<div class=\"footer-info\">            <div style=\"margin-top:0;margin-bottom:20px;font-weight: bold;font-size:15px\">VI TÍNH TRỌNG THỦY</div>            <p><span style=\"font-weight: bold;\">SỐ 38, ĐƯỜNG TA15, THỚI AN, QUẬN 12, TP HCM</span></p>                <p><span style=\"font-weight: bold;\">Tel: 0938 114 419</span></p>                <p><span style=\"font-weight: bold;\">Email: trongthuycomputer@gmail.com</span></p>        </div>"},{"SetId":6,"SettingId":"Facebook","SettingValue":"Ho Van Trong","SettingContent":"<p><a href=\"https://www.facebook.com/trong.v.ho.5\" target=\"_blank\">https://www.facebook.com/trong.v.ho.5</a><br></p>"}]' />
        <script type="text/javascript">
            $(document).ready(function() {
                if ($(".dps-ht").length > 0) {
                    $(".dps-ht").each(function() {
                        var _id = $(this).attr("id");
                        var curId = $(this).attr("data-id");
                        var _ty = $(this).attr("data-type");
                        var _su = $(this).attr("data-subT");
                        var data = JSON.parse($("#jsLienhe").val().toString());
                        var data_length = Object.keys(data).length;
                        for (var i = 0; i < data_length; i++) {
                            if (data[i] != '') {
                                if (data[i].SetId == curId) {
                                    if (_ty == "1") {
                                        $("#" + _id).html(data[i].SettingContent);
                                    } else if (_ty == "2") {
                                        $("#" + _id).html(data[i].SettingValue);
                                        $("#" + _id).attr("href", "tel:" + data[i].SettingValue.toString()
                                            .replaceAll(".", "").replaceAll(" ", ""));
                                    } else if (_ty == "22") {
                                        $("#" + _id).html(
                                            "<i class=\"fa fa-phone\"></i><span class=\"text-danger\">" +
                                            data[i].SettingValue + "</span>");
                                        $("#" + _id).attr("href", "tel:" + data[i].SettingValue.toString()
                                            .replaceAll(".", "").replaceAll(" ", ""));
                                    } else if (_ty == "4") {
                                        $("#" + _id).html("<i class=\"fa fa-envelope\"></i> " + data[i]
                                            .SettingValue);
                                        $("#" + _id).attr("href", "mailto:" + data[i].SettingValue.toString());
                                    } else if (_ty == "3") {
                                        $("#" + _id).html(_su + data[i].SettingValue);
                                    } else if (_ty == "5") {
                                        $("#" + _id).attr("alt", data[i].SettingValue);
                                        $("#" + _id).attr("title", data[i].SettingValue);
                                    }
                                    break;
                                }
                            }
                        }
                    });
                }
            });
            $("*[data-click='clickToggle']").click(function() {
                var strClass = $(this).attr("data-class");
                var strId = $(this).attr("data-id");
                $("." + strClass).slideUp();
                $("#" + strId).slideDown();
                $(this).find(".arrow").toggleClass("fa-angle-down");
                $(this).find(".arrow").toggleClass("fa-angle-up");
            });
            $('.bxslider').bxSlider({
                mode: 'horizontal',
                captions: true,
                adaptiveHeight: true,
                auto: true,
            });
            $(".search-reg button").click(function() {
                var txtsearch = $(".search-reg #txt-search").val();
                window.location.href = "/tim-kiem?seachtext=" + txtsearch;
            });
            $(".register").click(function() {
                var emaildangki = $("#txt-dangki").val();
                if (emaildangki.length == 0) {
                    alert("Cần nhập vào email đầy đủ");
                    return;
                }
                $.ajax({
                    url: '/dang-ki-email',
                    data: '_strEmail=' + emaildangki,
                    dataType: 'text',
                    type: 'GET',
                    cache: false,
                    success: function(result) {
                        if (result == "1") {
                            alert("Đã đăng kí thông tin gửi thành công");
                            $("#txt-dangki").val('');
                        } else {
                            alert("Có lỗi từ hệ thống");
                        }
                    }
                });
            });
            $("*[data-click='clickToggle']:first").click();
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                if ($(document).width() < 991) {
                    $('#secondDiv').insertBefore('#firstDiv');
                }
            });
        </script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script><!-- iconsax js -->
        <script src="{{ asset('assets/js/iconsax.js') }}"></script><!-- cursor js-->
        <script src="{{ asset('assets/js/stats.min.js') }}"></script>

        <script src="{{ asset('assets/js/swiper-slider/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-slider/swiper-custom.js') }}"></script>
        <script src="{{ asset('assets/js/cart-timer.js') }}"></script>
        <script src="{{ asset('assets/js/cart.js') }}"></script><!-- touchspin-->
        <script src="{{ asset('assets/js/touchspin.js') }}"></script><!-- cookie js-->
        <script src="{{ asset('assets/js/cookie.js') }}"></script><!-- tost js -->
        <script src="{{ asset('assets/js/toastify.js') }}"></script>
        <script src="{{ asset('assets/js/theme-setting.js') }}"></script><!-- Theme js-->
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</div>