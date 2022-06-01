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
@yield('service')
@yield('section')
<div class="footer">
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
</div>
<script>
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
</script>
</body>
</html>
