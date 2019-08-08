@extends('layouts.main')
@section('title')
Freshgear | All Products
@stop
@section('content')
<section class="content-area products-all-page">
    <div class="filter-section">
        <div class="filter">
            <input type="checkbox" name="" id="gender-options" class="toggle">
            <label class="title" for="gender-options">Gender</label>
            <div class="content">
                <div class="gender">
                    <div class="option">Male</div>
                    <div class="option">Female</div>
                </div>
            </div>
        </div>
        <div class="filter">
            <input type="checkbox" name="" id="brand-options" class="toggle">
            <label class="title" for="brand-options">Brand</label>
            <div class="content">
                <div class="brand">
                    <div class="option">Nike</div>
                    <div class="option">Jordan</div>
                    <div class="option">Adidas</div>
                    <div class="option">Puma</div>
                    <div class="option">Asics</div>
                    <div class="option">Saucony</div>
                </div>
            </div>
        </div>
        <div class="filter">
            <input type="checkbox" name="" id="price-options" class="toggle">
            <label class="title" for="price-options">Price</label>
            <div class="content">
                <div class="price">

                    <input type="text" name="min" placeholder="min" class="option">

                    <input type="text" name="max" placeholder="max" class="option">


                </div>
            </div>
        </div>
        <div class="filter">
            <input type="checkbox" name="" id="size-options" class="toggle">
            <label class="title" for="size-options">Size</label>
            <div class="content">
                <div class="size">
                    <div class="option">6</div>
                    <div class="option">6.5</div>
                    <div class="option">7</div>
                    <div class="option">7.5</div>
                    <div class="option">8</div>
                    <div class="option">8.5</div>
                    <div class="option">9</div>
                    <div class="option">9.5</div>
                    <div class="option">10</div>
                    <div class="option">10.5</div>
                    <div class="option">11</div>
                    <div class="option">11.5</div>
                    <div class="option">12</div>
                    <div class="option">12.5</div>
                    <div class="option">13</div>

                </div>
            </div>
        </div>
        <button>Filter</button>
    </div>
    <div class="all-products-grid">
        @foreach ($products as $product)

        <div class="product-wrap">
            <div class="product">
                <div class="circle">
                    <img src="img/products/nike-sb-dogwalkers.png">
                </div>
            </div>
            <div class="title">Nike SB Dog Walker</div>
            <div class="price">$350</div>
        </div>

        @endforeach
    </div>
</section>
@stop
