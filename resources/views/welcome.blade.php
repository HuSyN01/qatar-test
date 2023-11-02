@extends('layouts.app')

@section('content')

   @include('components.front.slider')

    @include('components.front.cigrette')

   @include('components.front.products')

    <div class="vc-row vc-row-fluid">
        <div class="wpb_column col-lag-8  col-lg-8 col-md-8 col-sm-12">
            <div class="hot_deals">
                <img alt="Hot deals" class="img-responsive img-hot-deals" src="{{asset('assets/images/banner/img_hot_deals.jpg')}}"/>
                <div class="caption">
                    <img alt="" class="img_content" src="{{asset('assets/images/banner/img_content.png')}}"/>
                    <h4 class="special_sale">Special sale</h4>
                    <h2 class="tittle_hot_deals">hot deals with sale up to 50% off <br/>from barley</h2>
                    <div class="view_all"><a href="#">view all</a></div>
                </div>
            </div>
        </div>
        <div class="wpb_column col-lag-4 col-lg-4 col-md-4 col-sm-12">
            <div class="pro_inner">
                <div class="products">
                    <div class="distance distance_v1">
                        <div class="row">
                            <div class="owl-carousel product2_owl owl-theme">
                                <div class="item">
                                    <div class="product_wrap pro_simple">
                                        <div class="product">
                                            <a href="#" class="product">
                                                <span class="new">new</span>
                                                <div class="product-loop-front">
                                                    <img src="{{asset('assets/images/product/img4_product.jpg')}}" alt="" class="img-responsive img_product">
                                                </div>
                                                <div class="product-loop-back">
                                                    <img src="{{asset('assets/images/product/img2_product.jpg')}}" alt="" class="img-responsive img_product">
                                                </div>
                                            </a>
                                            <div class="action">
                                                <a href="#"><span class="quickview">Quick View</span></a>
                                                <a href="#"><span class="wishlist">Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <div class="tittle_product">
                                                <a href="#">Slim Collarless Blazer In Jersey</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_new">$125.30</span>
                                                <span class="price_old">$140.50</span>
                                            </div>
                                            <div class="counter">
                                                <span class="expires">Expires:</span>
                                                <div data-countdown="countdown" data-date="11-20-2016-10-20-30"></div>
                                            </div>
                                            <div class="cart">
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap pro_simple">
                                        <div class="product">
                                            <a href="#" class="product">
                                                <span class="new">new</span>
                                                <div class="product-loop-front">
                                                    <img src="{{asset('assets/images/product/img1_product.jpg')}}" alt="" class="img-responsive img_product">
                                                </div>
                                                <div class="product-loop-back">
                                                    <img src="{{asset('assets/images/product/img3_product.jpg')}}" alt="" class="img-responsive img_product">
                                                </div>
                                            </a>
                                            <div class="action">
                                                <a href="#"><span class="quickview">Quick View</span></a>
                                                <a href="#"><span class="wishlist">Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <div class="tittle_product">
                                                <a href="#">Slim Collarless Blazer In Jersey</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_new">$125.30</span>
                                                <span class="price_old">$140.50</span>
                                            </div>
                                            <div class="counter">
                                                <span class="expires">Expires:</span>
                                                <div data-countdown="countdown" data-date="11-20-2016-10-20-30"></div>
                                            </div>
                                            <div class="cart">
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_wrap pro_simple">
                                        <div class="product">
                                            <a href="#" class="product">
                                                <span class="new">new</span>
                                                <div class="product-loop-front">
                                                    <img src="{{asset('assets/images/product/img4_product.jpg')}}" alt="" class="img-responsive img_product">
                                                </div>
                                                <div class="product-loop-back">
                                                    <img src="{{asset('assets/images/product/img3_product.jpg')}}" alt="" class="img-responsive img_product">
                                                </div>
                                            </a>
                                            <div class="action">
                                                <a href="#"><span class="quickview">Quick View</span></a>
                                                <a href="#"><span class="wishlist">Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <div class="tittle_product">
                                                <a href="#">Slim Collarless Blazer In Jersey</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_new">$125.30</span>
                                                <span class="price_old">$140.50</span>
                                            </div>
                                            <div class="counter">
                                                <span class="expires">Expires:</span>
                                                <div data-countdown="countdown" data-date="11-20-2016-10-20-30"></div>
                                            </div>
                                            <div class="cart">
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_more">
                    <a class="view_more_pro" href="#"><span>VIEW MORE PRODUCTS</span></a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>

        function addToCartClick(event) {
            event.preventDefault();

            var productId = event.target.getAttribute("data-product-id");
            var quantity = event.target.getAttribute("data-quantity");

            var postData = {
                userId: 2,
                date: "2020-02-03",
                products: [
                    { productId: productId, quantity: quantity }
                ]
            };

            fetch("https://fakestoreapi.com/carts", {
                method: "POST",
                body: JSON.stringify(postData),
                headers: {
                    "Content-Type": "application/json"
                }
            })
                .then(function(response) {
                    if (response.ok) {
                        alert("Product added to the cart Successfully!");
                    } else {

                        alert("Failed to add the product to the cart.");
                    }
                })
                .catch(function(error) {

                    console.error("An error occurred:", error);
                });
        }

        var addToCartLinks = document.querySelectorAll(".add-to-cart-link");
        addToCartLinks.forEach(function(link) {
            link.addEventListener("click", addToCartClick);
        });
    </script>


@endsection
