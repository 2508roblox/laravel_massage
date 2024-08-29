<div>

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1.0, maximum-scale=2, shrink-to-fit=no, viewport-fit=cover">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Giỏ hàng - Tokuyo</title>
        <meta name="description" content="Giỏ hàng - Tokuyo">
        <meta name="keywords" content="Giỏ hàng - Tokuyo">
        <meta name="robots" content="index,follow">
        <meta name="author" content="Tokuyo">
        <meta name="copyright" content="Tokuyo">
        <meta property="fb:app_id" content="722443714594411">
        <meta property="og:type" content="website">
        <meta property="og:image"
            content="https://tokuyo.com.vn//public/client/images/default/no-img-500x500.jpg?v=4.11">
        <meta property="og:image:alt" content="Giỏ hàng - Tokuyo">
        <meta property="og:title" content="Giỏ hàng - Tokuyo">
        <meta property="og:url" content="https://tokuyo.com.vn/gio-hang">
        <meta property="og:description" content="Giỏ hàng - Tokuyo">
        <meta name="google-site-verification" content="bnqsahehkSigLkSAfz9LF906UFQeyzW0kP3pbwdZzTo" />
        <meta name="google-site-verification" content="WoIuafljGPhABWV0oAEdSpmjR--Us70bFJ3Fd765bzY" />
        <meta name="theme-color" content="#121212">
        <meta name="geo.region" content="VN-HN">
        <meta name="geo.placename" content="Hà Nội">
        <meta name="geo.position" content="21.042667">
        <meta name="ICBM" content="105.8405317">
        <meta name="google-site-verification" content="ZNZeA_izpdD_sPkDH2SKRKNNndQi3uKfcz1FD-raQ7o" />
        <link type="image/x-icon" rel="shortcut icon" href="https://tokuyo.com.vn/uploads/favicon/favicon.png?v=4.11">
        <link rel="canonical" href="https://tokuyo.com.vn/gio-hang">
        <link rel="alternate" href="https://tokuyo.com.vn/gio-hang" hreflang="vi-vn" />
        <link rel="alternate" type="application/rss+xml" title="Tokuyo Feed" href="https://tokuyo.com.vn/rss" />





        <link rel="preload" as="style" href="/public/client/css/style-libs.min.css?v=4.11">
        <link rel="preload" as="style" href="/public/client/css/style.min.css?v=4.11">
        <link rel="stylesheet" href="/public/client/css/style-libs.min.css?v=4.11">

        <link rel="stylesheet" href="/public/client/css/style.min.css?v=4.11">

        <link rel="preload" as="script" href="/public/client/js/jquery.js?v=4.11">
        <link rel="preload" as="script" href="/public/client/js/lib.min.js?v=4.11">
        <script src="/public/client/js/jquery.js?v=4.11"></script>
        <script src="/public/client/js/bootstrap.bundle.min.js?v=4.11"></script>

        <link rel="dns-prefetch" href="//www.googletagmanager.com">





    </head>

    <body>


        @include('livewire.partials.header')

        <main data-act="act-product">
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-12"></div>
                    <div class="col-sm-8 col-12">
                        <div class="row mt-3">
                            <div class="col">
                                <a href="https://tokuyo.com.vn/">
                                    Mua thêm
                                </a>
                            </div>
                            <div class="col text-right">
                                Giỏ hàng
                            </div>
                        </div>
                        <div class="card my-5 shadow">
                            <div class="card-body">

                                <div class=" cart-table">
                                    <div class="table-title">
                                    </div>
                                    <div class="">
                                        <div id="cart-content">
                                            @forelse($cart_items as $item)
                                                <div class="cart-item mb-3">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-2 col-3">
                                                            <p>
                                                                <a href="product.html">
                                                                    <img src="{{ Storage::url($item['image']) }}"
                                                                        alt="{{ $item['name'] }}"
                                                                        class="img-fluid d-block">
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-10 col-9">
                                                            <div class="row">
                                                                <div class="col-lg-8 col-12">
                                                                    <p>
                                                                        <a href="product.html"
                                                                            class="text-dark font-weight-bold">
                                                                            {{ $item['name'] }}
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                                <div class="col-lg-4 col-12">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-lg-12 col-6">
                                                                            <p
                                                                                class="text-lg-right d-inline-block d-lg-block">
                                                                                <span
                                                                                    class="saleprice font-weight-bold">
                                                                                    {{ number_format($item['unit_amount']) }}đ
                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-12 col-6" style="
                                                                        display: flex;
                                                                        justify-content: end;
                                                                    ">
                                                                            <p class="text-right">
                                                                                <style>
                                                                                    .quantity {
    display: flex;
    align-items: center;
}

.quantity button {
    background-color: transparent;
    border: none;
    padding: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.quantity button svg {
    width: 14px;
    height: 14px;
    fill: #000; /* Change the color as needed */
    transition: fill 0.2s ease;
}

.quantity button:hover svg {
    fill: #ff0000; /* Optional: Add a hover color */
}

.quantity input {
    width: 50px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 0 0.5rem;
    padding: 0.5rem;
}

                                                                                </style>
                                                                            <div class="quantity">
                                                                                <button class="minus"
                                                                                    wire:click="decrementQuantityToCartItem({{ $item['product_id'] }})"
                                                                                    type="button">

                                                                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                                                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                                                    <!DOCTYPE svg
                                                                                        PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                                    <svg fill="#000000" version="1.1"
                                                                                        id="Capa_1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        width="10px" height="10px"
                                                                                        viewBox="0 0 459.313 459.314"
                                                                                        xml:space="preserve">
                                                                                        <g>
                                                                                            <path d="M459.313,229.648c0,22.201-17.992,40.199-40.205,40.199H40.181c-11.094,0-21.14-4.498-28.416-11.774
  C4.495,250.808,0,240.76,0,229.66c-0.006-22.204,17.992-40.199,40.202-40.193h378.936
  C441.333,189.472,459.308,207.456,459.313,229.648z" />
                                                                                        </g>
                                                                                    </svg>
                                                                                </button>
                                                                                <input type="number"
                                                                                    wire:change="updateCartItemQuantity({{ $item['product_id'] }}, $event.target.value)"
                                                                                    value="{{ $item['quantity'] }}"
                                                                                    min="1">
                                                                                <button class="plus"
                                                                                    wire:click="incrementQuantityToCartItem({{ $item['product_id'] }})"
                                                                                    type="button">

                                                                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                                                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                                                    <!DOCTYPE svg
                                                                                        PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                                    <svg fill="#000000" version="1.1"
                                                                                        id="Capa_1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        width="10px" height="10px"
                                                                                        viewBox="0 0 45.402 45.402"
                                                                                        xml:space="preserve">
                                                                                        <g>
                                                                                            <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141
  c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27
  c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435
  c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z" />
                                                                                        </g>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>


                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button"
                                                        class="btn btn-light border text-sm btn-sm btn-remove py-0"
                                                        aria-label="Close"
                                                        wire:click="removeCartItem({{ $item['product_id'] }})">
                                                        <span aria-hidden="true">× Xóa</span>
                                                    </button>
                                                </div>
                                            @empty
                                                <div class="no-data text-center">
                                                    <img style="width: 30%" width="3rem" src="https://cdn-icons-png.flaticon.com/512/11329/11329060.png"
                                                        alt="Empty Cart">
                                                    <h4>You have nothing in your shopping cart!</h4>
                                                    <p>Today is a great day to purchase the things you have been holding
                                                        onto! or <span>Carry on Buying</span></p>
                                                </div>
                                            @endforelse
                                            @if (count($cart_items) > 0)
                                                <div class="cart-item">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p>Tổng tiền:</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="text-right">
                                                                @php
                                                                    function calculateTotalAmount($cart_items)
                                                                    {
                                                                        return array_reduce(
                                                                            $cart_items,
                                                                            function ($carry, $item) {
                                                                                return $carry +
                                                                                    $item['quantity'] *
                                                                                        $item['unit_amount'];
                                                                            },
                                                                            0,
                                                                        );
                                                                    }

                                                                @endphp
                                                                <span
                                                                    class="saleprice">{{ number_format(calculateTotalAmount($cart_items)) }}đ</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xxl-12 col-xl-12">
                            <div class="card my-5 shadow " >
                                <div class="cart-body p-4 w-full">
                                    <h6 class="mb-4">Nhập thông tin đơn hàng</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td><label>Họ Tên</label></td>
                                                    <td><input type="text" id="name" wire:model='name'
                                                            class="form-control input-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Địa chỉ</label></td>
                                                    <td><input type="text" id="address" wire:model='address'
                                                            class="form-control input-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Email</label></td>
                                                    <td><input type="text" id="email" wire:model='email'
                                                            class="form-control input-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Điện thoại</label></td>
                                                    <td><input type="text" id="phone" wire:model='phone'
                                                            class="form-control input-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Ghi chú</label></td>
                                                    <td>
                                                        <textarea id="txtcontent" wire:model='notes' class="form-control input-sm"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="2">
                                                        <input type="button" value="Gửi thông tin đơn hàng"
                                                            class=" btn btn-danger btn-submit"
                                                            wire:click='submitOrder'>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2 col-12"></div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    load_cart_content();
                });
            </script>
            <section class="why-choose-us" style="content-visibility: auto;">
                <div class="container">
                    <h2 class="section-title">Tại sao nên chọn Tokuyo?</h2>
                    <div class="inner">
                        <div class="item">
                            <div class="icon"><img class="lozad" width="54" height="54"
                                    data-src="/public/client/images/icon/why-1.png?v=4.11" alt="Dịch vụ NHẬT BẢN">
                            </div>
                            <h3 class="title">Dịch vụ Nhật Bản</h3>
                            <div class="desc">Tokuyo là thương hiệu uy tín số 1 về văn hóa dịch vụ khách hàng “trung
                                thực, tôn trọng cam kết” theo phong cách Nhật Bản</div>
                        </div>
                        <div class="item">
                            <div class="icon"><img class="lozad" width="54" height="54"
                                    data-src="/public/client/images/icon/why-2.png?v=4.11" alt="Xuất xứ rõ ràng">
                            </div>
                            <h3 class="title">Xuất xứ rõ ràng</h3>
                            <div class="desc">Nhập khẩu chính hãng, đầy đủ giấy tờ chứng nhận xuất xứ và chất
                                lượng:<br>CO/CQ, giấy tờ hải quan</div>
                        </div>
                        <div class="item">
                            <div class="icon"><img class="lozad" width="54" height="54"
                                    data-src="/public/client/images/icon/why-3.png?v=4.11" alt="Chất lượng quốc tế">
                            </div>
                            <h3 class="title">Chất lượng quốc tế</h3>
                            <div class="desc">Tiên phong nhập khẩu và phân phối về dòng sản phẩm chăm sóc sức khỏe
                                gia đình chất lượng cao uy tín</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="dang-ky-tu-van" id="dang_ky_tu_van" style="content-visibility: auto;">
                <div class="container">
                    <div class="title">Nhận tư vấn nhanh từ Tokuyo</div>
                    <div class="desc">Chúng tôi sẽ bảo mật thông tin của bạn!</div>
                    <form class="_form" onsubmit="return false;">
                        <input type="hidden" name="email" value="">
                        <input type="hidden" name="address" value="">
                        <input type="hidden" name="request" value="">
                        <input type="hidden" name="url-request" value="https://tokuyo.com.vn/lien-he/submit">
                        <input type="hidden" name="url-complete" value="https://tokuyo.com.vn/lien-he/hoan-thanh">
                        <input type="hidden" name="title" value="Đăng ký tư vấn mua ghế massage">
                        <input type="hidden" name="referrer" value="https://tokuyo.com.vn/gio-hang">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_term" value="">
                        <input type="text" class="form-control" placeholder="Tên của bạn" name="fullname"
                            required>
                        <input type="text" class="form-control" placeholder="Số điện thoại" name="phone"
                            required>
                        <button class="btn btn-submit" onclick="contact(this);" data-parent="#dang_ky_tu_van"
                            type="button">Gọi cho tôi</button>
                    </form>
                </div>
            </section>
        </main>
        @include('livewire.partials.footer')
        @include('livewire.partials.ctalink')

        <div class="offcanvas offcanvas-start" id="offcanvasNavbar">
            <div class="offcanvas-header">
                <button type="button" class="close" data-dismiss="offcanvas" data-target="#offcanvasNavbar"><i
                        class="bi bi-x-lg"></i></button>
                <div class="offcanvas-title">
                    <a href="tel:0911.270.666" class="btn consult"><i class="bi bi-whatsapp"></i> Tư vấn</a>
                    <a href="https://tokuyo.com.vn/" title="Tokuyo">
                        <img width="80" height="32" src="/public/client/images/logo.png?v=4.11"
                            alt="Tokuyo" class="logo">
                    </a>
                </div>
            </div>
            <div class="offcanvas-body">
                <nav class="navbar navbar-expand-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/gioi-thieu" class="nav-link" title="Giới thiệu">Giới
                                thiệu</a></li>
                        <li class="nav-item dropdown"><a href="/ghe-massage" class="nav-link" title="Ghế Massage"
                                data-toggle="dropdown">Ghế Massage</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="/ghe-massage-cao-cap" class="dropdown-item"
                                        title="Ghế Massage Cao Cấp">Ghế Massage Cao Cấp</a></li>
                                <li class="nav-item"><a href="/ghe-massage-tri-lieu" class="dropdown-item"
                                        title="Ghế massage Trị Liệu">Ghế massage Trị Liệu</a></li>
                                <li class="nav-item"><a href="/ghe-massage-family" class="dropdown-item"
                                        title="Ghế massage Family">Ghế massage Family</a></li>
                                <li class="nav-item"><a href="/ghe-massage-thuong-gia" class="dropdown-item"
                                        title="Ghế Massage Thương Gia">Ghế Massage Thương Gia</a></li>
                                <li class="nav-item"><a href="/ghe-massage-panasonic" class="dropdown-item"
                                        title="Ghế massage Panasonic">Ghế massage Panasonic</a></li>
                                <li class="nav-item"><a href="/ghe-massage-gia-re" class="dropdown-item"
                                        title="Ghế Massage Giá Rẻ">Ghế Massage Giá Rẻ</a></li>
                                <li class="nav-item"><a href="/ghe-massage-fujicare" class="dropdown-item"
                                        title="Ghế massage Fujicare">Ghế massage Fujicare</a></li>
                                <li class="nav-item"><a href="/ghe-massage-trung-bay" class="dropdown-item"
                                        title="Ghế massage trưng bày giá sốc">Ghế massage trưng bày giá sốc</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="/tin-tuc.html" class="nav-link"
                                title="Cẩm nang Tokuyo" data-toggle="dropdown">Cẩm nang Tokuyo</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="/tin-tuc/review-dia-diem-mua-ghe-massage"
                                        class="dropdown-item" title="Review địa điểm mua">Review địa điểm mua</a></li>
                                <li class="nav-item"><a href="/tin-tuc/review-thuong-hieu-ghe-massage"
                                        class="dropdown-item" title="Review thương hiệu">Review thương hiệu</a></li>
                                <li class="nav-item"><a href="/tin-tuc/kien-thuc-ghe-massage" class="dropdown-item"
                                        title="Kiến thức ghế massage">Kiến thức ghế massage</a></li>
                                <li class="nav-item"><a href="/cau-chuyen-khach-hang" class="dropdown-item"
                                        title="Câu chuyện khách hàng">Câu chuyện khách hàng</a></li>
                                <li class="nav-item"><a href="/tin-tuc/tuyen-dung" class="dropdown-item"
                                        title="Tuyển dụng">Tuyển dụng</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="/he-thong-cua-hang.html" class="nav-link"
                                title="Showroom">Showroom</a></li>
                        <li class="nav-item"><a href="/nhuong-quyen" class="nav-link" title="Hợp tác kinh doanh">Hợp
                                tác kinh doanh</a></li>
                        <li class="nav-item"><a href="/lien-he.html" class="nav-link" title="Liên hệ">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                <hr>
                <div class="submenu">
                    <ul>
                        <li>
                            <a href="https://tokuyo.com.vn/tin-tuc.html" title="Tin tức">Tin tức</a>
                        </li>
                        <li>
                            <a href="https://tokuyo.com.vn/thong-tin/chinh-sach-bao-hanh-bao-tri.html"
                                title="Hỗ trợ bảo hành">Hỗ trợ bảo hành</a>
                        </li>
                        <li>
                            <a href="https://tokuyo.com.vn/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="https://tokuyo.com.vn/he-thong-cua-hang.html" title="Hệ thống showroom">Hệ thống
                                showroom</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offcanvas-backdrop fade"></div>
        <script>
            $(document).ready(function() {
                $('[data-toggle=offcanvas]').on('click', function() {
                    var self = $(this);
                    var target = $(self.data('target'));
                    if (target.length) {
                        target.addClass('show');
                        target.css({
                            'visibility': 'visible'
                        });
                        $('.offcanvas-backdrop').addClass('show');
                    }
                    return false;
                });
                $('[data-dismiss=offcanvas]').on('click', function() {
                    var self = $(this);
                    var target = $(self.data('target'));
                    if (target.length) {
                        target.removeClass('show');
                        $('.offcanvas-backdrop').removeClass('show');
                    }
                });
                window.addEventListener('click', function(e) {
                    if (!document.getElementById('offcanvasNavbar').contains(e.target)) {
                        $('[data-dismiss=offcanvas]').trigger('click');
                    }
                });
            });
        </script>
        <div class="modal fade" id="quickview" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var modalQuickviewId = $('#quickview');
                modalQuickviewId.on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var postId = button.data('postid');
                    var url = base_url + 'quickview';
                    $('.loading').fadeIn();
                    $.ajax({
                        url: url,
                        type: 'post',
                        dataType: 'json',
                        data: {
                            post_id: postId
                        },
                        success: function(response) {
                            if (response.code != 200) {
                                console.log(response.message);
                            } else {
                                modalQuickviewId.find('.modal-body').html(response.data);
                            }
                        },
                        complete: function() {
                            $('.loading').fadeOut();
                        }
                    });
                });
            });
        </script>
        <div class="position-fixed bottom-0 left-0 p-3" style="z-index: 5; left: 0; bottom: 0; max-width: 300px;">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true"
                data-delay="4000">
                <div class="toast-header">
                    <strong class="mr-auto" id="title">Anh Khoa</strong>
                    <small><span id="ago">0</span> phút trước</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    <div class="row">
                        <div class="col-4"><img src="https://tokuyo.com.vn/uploads/thanh-tri.jpg?v=4.11"
                                alt="Anh Khoa"></div>
                        <div class="col-8">Mua ghế massage TC-698 thanh trì ,hà nội</div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var toastLive = $('#liveToast');
            $(document).ready(function() {
                toastLive.on('show.bs.toast', function(event) {
                    toastLoad();
                });
                toastLive.toast('show');
                $(window).on('load', function() {
                    setInterval(function() {
                        toastLive.toast('show');
                    }, 15000);
                });
            });

            function toastLoad() {
                var url = base_url + 'toast';
                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'json',
                    data: {},
                    success: function(response) {
                        if (response.code == 200) {
                            toastLive.find('#title').text(response.data.title);
                            toastLive.find('#ago').text(response.data.ago);
                            toastLive.find('.toast-body').text(response.data.htnl);
                        } else {
                            console.log(response.message);
                        }
                    }
                });
            }
        </script>
        <div class="loading">
            <div class="inner">
                <div class="spinner-border text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        <div class="cart-notify">
            <div class="inner">
                <div class="icon"><i class="icofont-tick-mark"></i></div>
                <div class="txt">Đã thêm vào giỏ hàng</div>
                <a href="https://tokuyo.com.vn/gio-hang" title="Chuyến đến giỏ hàng" class="btn">Chuyến đến giỏ
                    hàng</a>
                <a href="#" class="remove">&times;</a>
            </div>
        </div>
        <script src="/public/client/js/bootstrap-select.min.js?v=4.11"></script>
        <script src="/public/client/js/owl.carousel.min.js?v=4.11"></script>
        <script src="/public/client/js/jquery.lazy.min.js?v=4.11"></script>
        <script src="/public/client/js/lozad.min.js?v=4.11"></script>
        <script src="/public/client/js/lib.min.js?v=4.11"></script>

        <script>
            $(document).ready(function() {
                $('[data-toggle="selectpicker"]').selectpicker();
                var class_init = $('.lozad');
                if (class_init.length < 1) {
                    return;
                }

                const observer = lozad(); // lazy loads elements with default selector as '.lozad'
                observer.observe();
            });
        </script>
        <script>
            $(document).ready(function() {
                $('img').each(function(index, element) {
                    if (!$(this).attr('alt') || $(this).attr('alt') == '') {
                        $(this).attr('alt', 'Tokuyo thương hiệu ghế massage Nhật Bản hàng đầu Việt Nam');
                    }
                });
                $('a').each(function(index, element) {
                    if (!$(this).attr('title') || $(this).attr('title') == '') {
                        $(this).attr('title', 'Tokuyo thương hiệu ghế massage Nhật Bản hàng đầu Việt Nam');
                    }
                });
                $('iframe').each(function(index, element) {
                    if (!$(this).attr('title') || $(this).attr('title') == '') {
                        $(this).attr('title', 'Tokuyo thương hiệu ghế massage Nhật Bản hàng đầu Việt Nam');
                    }
                });
            });
        </script>


 
    </body>
</div>
