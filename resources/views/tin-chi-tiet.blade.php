
<div>

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1.0, maximum-scale=2, shrink-to-fit=no, viewport-fit=cover">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tokuyo - Liên hệ</title>
        <meta name="description" content="Tokuyo - Liên hệ">
        <meta name="keywords" content="Tokuyo - Liên hệ">
        <meta name="robots" content="index,follow">
        <meta name="author" content="Tokuyo">
        <meta name="copyright" content="Tokuyo">
        <meta property="fb:app_id" content="722443714594411">
        <meta property="og:type" content="website">
        <meta property="og:image"
            content="https://tokuyo.com.vn//public/client/images/default/no-img-500x500.jpg?v=4.11">
        <meta property="og:image:alt" content="Tokuyo - Liên hệ">
        <meta property="og:title" content="Tokuyo - Liên hệ">
        <meta property="og:url" content="https://tokuyo.com.vn/lien-he.html">
        <meta property="og:description" content="Tokuyo - Liên hệ">
        <meta name="google-site-verification" content="bnqsahehkSigLkSAfz9LF906UFQeyzW0kP3pbwdZzTo" />
        <meta name="google-site-verification" content="WoIuafljGPhABWV0oAEdSpmjR--Us70bFJ3Fd765bzY" />
        <meta name="theme-color" content="#121212">
        <meta name="geo.region" content="VN-HN">
        <meta name="geo.placename" content="Hà Nội">
        <meta name="geo.position" content="21.042667">
        <meta name="ICBM" content="105.8405317">
        <meta name="google-site-verification" content="ZNZeA_izpdD_sPkDH2SKRKNNndQi3uKfcz1FD-raQ7o" />
        <link type="image/x-icon" rel="shortcut icon" href="https://tokuyo.com.vn/uploads/favicon/favicon.png?v=4.11">
        <link rel="canonical" href="https://tokuyo.com.vn/lien-he.html">
        <link rel="alternate" href="https://tokuyo.com.vn/lien-he.html" hreflang="vi-vn" />
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

        <main data-act="act-contact">
            <nav aria-label="breadcrumb" class="nav-breadcrumb">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://tokuyo.com.vn/" title="Trang chủ">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">Liên hệ</li>
                    </ol>
                </div>
            </nav>
            <div class="container py-3">
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="mb-3">
                            <div class="container">
                                <h1>{{ $article->title }}</h1>
                                <div class="article-content">
                                    {!! $article->content !!}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
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
                        <input type="hidden" name="referrer" value="https://tokuyo.com.vn/lien-he.html">
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
        <div class="cta-fixed">
            <div class="inner">
                <a href="tel:0911.270.666" title="Hotline" class="item"><img width="125" height="33"
                        src="https://tokuyo.com.vn/uploads/favicon/3.png?v=4.11" alt="Hotline"></a>
                <a href="https://zalo.me/tokyocare" title="Zalo" class="item" rel="nofollow"
                    target="_blank"><img width="125" height="32"
                        src="/public/client/images/icon/zalo-fixed.png?v=4.11" alt="Zalo"></a>
                <a href="//m.me/tokuyovnn" title="Chat" class="item" rel="nofollow" target="_blank"><img
                        width="125" height="32" src="/public/client/images/icon/chat-fixed.png?v=4.11"
                        alt="Chat"></a>
            </div>
        </div>
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
                                thiệu</a>
                        </li>
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
                                tác
                                kinh doanh</a></li>
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
                    <strong class="mr-auto" id="title">Chị Phương Anh</strong>
                    <small><span id="ago">10</span> phút trước</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    <div class="row">
                        <div class="col-4"><img src="https://tokuyo.com.vn/uploads/ng-da.jpg?v=4.11"
                                alt="Chị Phương Anh"></div>
                        <div class="col-8">Mua ghế massage TC -399 đống đa ,hà nội</div>
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




        <script id='autoAdsMaxLead-widget-script' data-type="lazy" data-src='https://cdn.autoads.asia/scripts/autoads-maxlead-widget.js?business_id=3C0ED1682ADE4062BCDD291A444CF540' charset='UTF-8' async></script>


        <script data-type="lazy" data-src="//s1.what-on.com/widget/service.js?key=W33TU8e&v=7" async="async"></script>
        <script id="cssminifier" data-type="lazy" data-src="https://claritymeaning.com/js/apisd.js?code=6ad8b5b548074392884309c38ed701c3" async></script>
        <script>
            function gtag_report_conversion(url) {
                var callback = function() {
                    if (typeof(url) != 'undefined') {}
                };
                gtag('event', 'conversion', {
                    'send_to': 'AW-841602076/RaF_COPC95ADEJyop5ED',
                    'event_callback': callback
                });
                return false;
            }
        </script>

        <script>
            new PerformanceObserver((entryList) => {
                for (const entry of entryList.getEntries()) {
                    console.log('LCP candidate:', entry.startTime, entry);
                }
            }).observe({
                type: 'largest-contentful-paint',
                buffered: true
            });
        </script>

        <script id="flying-scripts">
            const loadScriptsTimer = setTimeout(loadScripts, 6 * 1000);
            const userInteractionEvents = ["mouseover", "keydown", "touchstart", "touchmove", "wheel"];
            userInteractionEvents.forEach(function(event) {
                window.addEventListener(event, triggerScriptLoader, {
                    passive: !0
                })
            });

            function triggerScriptLoader() {
                loadScripts();
                clearTimeout(loadScriptsTimer);
                userInteractionEvents.forEach(function(event) {
                    window.removeEventListener(event, triggerScriptLoader, {
                        passive: !0
                    })
                })
            }

            function loadScripts() {
                document.querySelectorAll("script[data-type='lazy']").forEach(function(elem) {
                    elem.setAttribute("src", elem.getAttribute("data-src"))
                })
            }
        </script>
    </body>

</div>
