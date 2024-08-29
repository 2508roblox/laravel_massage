<footer class="block-footer pc">
    <div class="container">
        <div class="row mb-xl-4 mb-3">
            <div class="col-xl-6 col-12">
                <div class="mb-3">
                    <a href="https://tokuyo.com.vn/" title="Tokuyo"><img width="150" height="60"
                            data-src="/public/client/images/logo.png?v=4.11" alt="Tokuyo"
                            class="lozad"></a>
                </div>
                <div class="desc">
                    <p><strong>Tokuyo<sup>©</sup></strong> Chuyên gia phân phối thiết bị chăm sóc sức khỏe hàng
                        đầu đến từ Nhật Bản, nổi bật với những sản phẩm ghế massage chất lượng cao, mang tới sự
                        thư giãn đầy sảng khoái cho người dùng với công nghệ hiện đại bậc nhất.</p>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="title">Về chúng tôi</div>
                        <ul>
                            <li><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu <i
                                        class="icofont-thin-right"></i></a></li>
                            <li><a href="/lien-he" title="Liên hệ">Liên hệ <i
                                        class="icofont-thin-right"></i></a></li>
                            <li><a href="/tin-tuc/cau-chuyen-khach-hang" title="Câu chuyện khách hàng">Câu
                                    chuyện khách hàng <i class="icofont-thin-right"></i></a></li>
                            <li><a href="https://tokuyo.com.vn/thong-tin/levankhoi.html"
                                    title="Giới thiệu CEO">Giới thiệu CEO <i
                                        class="icofont-thin-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="title">Chính sách</div>
                        @php
                        // Lấy dữ liệu từ model Page
                        $pages = \App\Models\Page::all();
                    @endphp
                        <ul>
                            @foreach ($pages as $page)
                                <li>
                                    <a href="{{ url('/pagesetting/' . $page->slug) }}" title="{{ $page->title }}">
                                        {{ $page->title }} <i class="icofont-thin-right"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-xl-center">
            @php
            // Lấy dữ liệu từ model Page
            $page = \App\Models\Page::where('slug', 'lien-he')->first();
        @endphp

        <div class="col-xl-6 col-12 short-info">
            @if($page)
                {!! $page->content !!}

            @else
                <p>Thông tin liên hệ không có sẵn.</p>
            @endif
        </div>
            <div class="col-xl-6 col-12">
                <div class="row align-items-center">
                    <div class="col-6">
                        <p class="text-left">
                            <a href="http://online.gov.vn/Home/WebDetails/59907?AspxAutoDetectCookieSupport=1"
                                title="BCT" target="_blank" rel="nofollow"><img class="lozad"
                                    width="210" height="64"
                                    data-src="/public/client/images/icon/bct.png?v=4.11" alt="BCT"></a>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="font-weight-bold">Tài khoản</div>
                        <p><a href="#" class="text-dark" title="Đơn hàng của tôi">Đơn hàng của tôi</a>
                        </p>
                        <div class="follow-us mt-3">
                            <a href="https://www.facebook.com/tokuyovnn" title="Facebook" rel="nofollow"
                                target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UC5GJs9qHkqmuMPDJNpkCAAQ" title="Youtube"
                                rel="nofollow" target="_blank"><i class="bi bi-youtube"></i></a>
                            <a href="#" title="Instagram" rel="nofollow" target="_blank"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/tokuyo" title="Linkedin" rel="nofollow"
                                target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://twitter.com/GTokuyo" title="Twitter" rel="nofollow"
                                target="_blank"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
