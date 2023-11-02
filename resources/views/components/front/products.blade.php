<div class="vc-row vc_row-fluid">
    <div class="pro_hot_trending">
        <div class="wpb_column col-lag-8 col-lg-8 col-md-8 col-sm-12">
            <div class="products">
                <div class="distance distance_v1">
                    <div class="row">
                        <div class="owl-carousel product_owl owl-theme">
                            @forelse($data as $item)
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="product">
                                            <a href="#" class="product">
                                                <div class="product-loop-front text-center">
                                                    <img src="{{ $item['image'] }}" alt="" class="img-responsive img_product" style="height: 250px;width: 200px">
                                                </div>
                                                <div class="product-loop-back text-center">
                                                    <img src="{{ $item['image'] }}" alt="" class="img-responsive img_product" style="height: 250px;width: 200px">
                                                </div>
                                            </a>
                                            <div class="action">
                                                <a href="#"><span class="quickview">Quick View</span></a>
                                                <a href="#"><span class="wishlist">Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <div class="tittle_product">
                                                <a href="#">{{ $item['title'] }}</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_new">{{ $item['price'] }}</span>
                                                <span class="price_old">{{ $item['price'] - 5 }}</span>
                                            </div>
                                            <div class="cart">
                                                <a href="#" class="add-to-cart-link" data-product-id="{{ $item['id'] }}" data-quantity="1">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
            <div class="view_more">
                <a class="view_more_pro" href="#"><span>VIEW MORE PRODUCTS</span></a>
            </div>
        </div>
        <div class="wpb_column col-lag-4 col-lg-4 col-md-4 col-sm-12">
            <div class="men_hot_trending ">
                <img src="{{asset('assets/images/banner/men_hot_trending.jpg')}}" alt="" class="img-responsive">
                <div class="caption">
                    <h4 class="men_clothing">men's clothing</h4>
                    <h2 class="tittle">hot trending in<br/> this week</h2>
                    <div class="shop_now"><a href="#">shop now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
