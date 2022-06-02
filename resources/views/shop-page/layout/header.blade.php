<header class="header">
    <div class="header-section row">
        <div class="logo col-md-2">
            <img src="{{ asset('image/logo3.png') }}" alt="" width="165px" srcset="" />
        </div>
        <div class="menu col-md-6">
            <div class="navigation">
                <ul class="nav-menu">
                    <li class="menu-item">
                        <a href="{{ route('index') }}" class="item-link">Trang Chủ</a>
                    </li>
                    @foreach($cate as $list)
                        <li class="menu-item">
                            <a href="{{ route('viewpage',$list->id) }}" class="item-link">{{ $list -> cate_tittle }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="search col-md-2">
            <form action="">
                <input
                    class="form-control"
                    type="text"
                    placeholder="Tìm kiếm..."
                    aria-label="Search"
                />
                <button class="search-button fas fa-search" type="submit"></button>
            </form>
        </div>

        <div class="cart col-md-1">
            <a href="#">
                <lord-icon
                    src="https://cdn.lordicon.com/cllunfud.json"
                    trigger="hover"
                    colors="outline:#121331,primary:#646e78,secondary:#ebe6ef"
                    style="width: 60px; height: 60px"
                >
                </lord-icon>
            </a>
        </div>
        <div class="login-admin col-md-1">
            <a href="{{ route('login') }}">
                <lord-icon
                    src="https://cdn.lordicon.com/ajkxzzfb.json"
                    trigger="hover"
                    colors="primary:#ffc738,secondary:#4bb3fd"
                    style="width: 60px; height: 60px"
                >
                </lord-icon>
            </a>
        </div>
    </div>
</header>
