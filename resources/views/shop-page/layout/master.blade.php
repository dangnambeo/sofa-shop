<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('FE_asset/css/style.css') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('FE_asset/bootstrap/css/bootstrap.min.css') }}" />

    <script src="{{ asset('FE_asset/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('FE_asset/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('FE_asset/fontawesome/css/all.css') }}" />
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="clean"></div>
@yield('banner')
<div class="section">
    <div class="service">
        <div class="box-container">
            <div class="box">
                <lord-icon
                    src="https://cdn.lordicon.com/jyijxczt.json"
                    trigger="loop"
                    colors="primary:#3a3347,secondary:#ffc738,tertiary:#ebe6ef,quaternary:#646e78"
                    style="width:80px;height:80px">
                </lord-icon>
                <h3>Giao hàng nhanh</h3>
            </div>
            <div class="box">
                <lord-icon
                    src="https://cdn.lordicon.com/nxvrkirq.json"
                    trigger="loop"
                    colors="primary:#eeaa66"
                    style="width:80px;height:80px">
                </lord-icon>
                <h3>Đổi trả trong vòng 1 tháng</h3>
            </div>
            <div class="box">
                <lord-icon
                    src="https://cdn.lordicon.com/vkweisbr.json"
                    trigger="loop"
                    colors="outline:#121331,primary:#646e78,secondary:#2ca58d,tertiary:#4bb3fd"
                    style="width:80px;height:80px">
                </lord-icon>
                <h3>Hỗ trợ 24/7</h3>
            </div>
        </div>
    </div>
</div>
@yield('section')
<div class="clean"></div>
<footer class="footer">
    <div class="main-footer">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <img src="{{ asset('/image/logo3.png') }}" alt="" width="100%" srcset="" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="insurance">
                    <div class="news">
                        <a href=""><p>Giới thiệu về cửa hàng</p></a>
                        <a href=""><p>Chính sách mua hàng</p></a>
                        <a href=""><p>Giới thiệu giao hàng và lắp đặt</p></a>
                        <a href=""><p>Chính sách bảo hành</p></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
</script>
</body>
</html>
