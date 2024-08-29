<header class="block-header">
    <div class="container">
        <div class="block-header-top">
            <a href="0911.270.666" title="Hotline" class="hotline"><i class="icofont-phone"></i>
                0911.270.666</a>
        </div>
        <div class="block-header-middle">
            <div class="logo">
                <a href="{{url('/')}}" title="Tokuyo"><img width="100" height="40"
                        src="/public/client/images/logo.png?v=4.11" alt="Tokuyo"></a>
                <div class="mobile">
                    <a href="tel:0911.270.666" title="Tư vấn" class="btn consult"><i class="icofont-phone"></i>
                        Tư
                        vấn</a>
                    <button class="btn menubar" type="button" data-toggle="offcanvas"
                        data-target="#offcanvasNavbar" aria-label="Show menu">
                        <span class="iconbar"></span>
                        <span class="iconbar"></span>
                        <span class="iconbar"></span>
                    </button>
                </div>
            </div>
            <div class="search">
                <form action="https://tokuyo.com.vn/tim-kiem" method="get">
                    <div class="input-group">
                        <div class="input-group-prepend category">
                            <select class="custom-select" name="category" aria-label="Chọn danh mục">
                                <option value="">Tất cả danh mục</option>
                                <option value="6"> Ghế Massage Toàn Thân</option>
                                <option value="14">------ Ghế Massage Cao Cấp</option>
                                <option value="24"> Ghế massage trị liệu</option>
                                <option value="18"> Ghế Massage Panasonic</option>
                                <option value="20"> Ghế Massage Cho Người Già</option>
                                <option value="28"> Ghế massage Fujicare</option>
                                <option value="15"> Máy Lọc Không Khí</option>
                                <option value="9"> Máy Massage Thông Minh</option>
                                <option value="16"> Máy Tạo Oxy</option>
                                <option value="17"> Máy Đo huyết Áp</option>
                            </select>
                        </div>
                        <input class="form-control" name="key" type="text" value=""
                            placeholder="Nhập tên, mã sản phẩm" required>
                        <div class="input-group-apppend">
                            <button class="btn" type="submit" aria-label="Tìm kiếm"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hotline-cart">
                <a href="tel:0911.270.666" title="Hotline" class="hotline">
                    <span class="icon mr-2"><i class="bi bi-telephone"></i></span>
                    <span class="txt">0911.270.666</span>
                </a>
                <a href="{{url('/gio-hang')}}" title="Giỏ hàng" class="cart">
                    <span class="icon">
                        <i class="bi bi-bag"></i>
                        <span class="cart-badge">1</span>
                    </span>
                    <span class="txt">Giỏ hàng</span>
                </a>
            </div>
        </div>
        <div class="block-header-bottom">
           @include('livewire.partials.navbar')
        </div>
    </div>
</header>
