<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet">


</head>

<body>
    <header>
        <div class="logo"><a href="/">freshgear</a></div>
        <div class="menu">
            <a href="/about">About</a>
            <a href="/products/new-arrivals">New Arrival</a>
            <a href="/products">Products</a>
            <a href="#" class="cart-link">Cart<span>4</span></a>
        </div>
    </header>

    
        @yield('content')
    
    <section id="cart-popup" class="">

        <div class="cart-title">
            <div class="title">My Cart</div>
        </div>

        <div class="cart-items">
            <div class="item-container">
                <div class="item">
                    <img src="img/products/nike-sb-dogwalkers.png">
                    <div class="delete-btn">
                        <div class="circle">X</div>
                    </div>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/products/nike-sb-dogwalkers.png">
                    <div class="delete-btn">
                        <div class="circle">X</div>
                    </div>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/products/nike-sb-dogwalkers.png">
                    <div class="delete-btn">
                        <div class="circle">X</div>
                    </div>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/products/nike-sb-dogwalkers.png">
                    <div class="delete-btn">
                        <div class="circle">X</div>
                    </div>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/products/nike-sb-dogwalkers.png">
                    <div class="delete-btn">
                        <div class="circle">X</div>
                    </div>
                </div>
            </div>
            <div class="item-container">
                <div class="item">
                    <img src="img/products/nike-sb-dogwalkers.png">
                    <div class="delete-btn">
                        <div class="circle">X</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-total">
            <div class="inside-container">
                <div class="title">Total</div>
                <div class="number">x4</div>
            </div>
        </div>
        <div class="price-total">
            <div class="inside-container">
                <div class="title">Total</div>
                <div class="number">$3,000</div>
            </div>
        </div>
        <div class="checkout">
            <div class="title">Checkout</div>
            <span class="ti-shopping-cart"></span>
        </div>
    </section>
</body>

</html>
