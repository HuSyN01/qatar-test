@extends('layouts.app')

@section('content')
    <div class="breadcrumbs breadcrumb_about_us breadcrumb_catefories_full_width">
        <div class="container">
            <div class="content_breadcumb">
                <h2>Shopping Cart</h2>
                <ul class="list-unstyled breadcrumb-links">
                    <li class="home"><a href="#">Home / </a></li>
                    <li class="home"><a href="#">Features / </a></li>
                    <li class="about_us active"> Shopping Cart </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-7-shopping-cart">
                    <div class="your_shopping_cart shopping_default">
                        <h2 class="title title_default">your shopping cart</h2>
                        <div class="cart-form">
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="product-name">Products</th>
                                        <th class=""></th>
                                        <th>Price</th>
                                        <th class="th_quatity">Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($data['products'] as $product)
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#" class="remove"><span aria-hidden="true" class="icon_close"></span></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">
                                                    <img src="{{$product['image'] ?? asset('assets/images/product/shopping_cart1.jpg')}}" alt="">
                                                </a>
                                            </td>
                                            <td class="pro_name">
                                                <a href="#">
                                                    <span>{{$product['title'] ?? 'Test Item'}}</span>
                                                </a>
                                            </td>
                                            <td class="product-price">
                                                <p class="price">{{ $item['price'] ?? '$25' }}</p>
                                            </td>
                                            <td>
                                                <div class="quantity_product quantity_product_15 size_product">
                                                    <form enctype="multipart/form-data">
                                                        <div class="product-signle-options product_15 clearfix">
                                                            <div class="selector-wrapper size">
                                                                <div class="quantity_shop_cart">
                                                                    <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <p class="price">{{ $item['price'] ?? '$25' }}</p>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="calculate_shipping shopping_default">
                        <h2 class="title title_default">calculate shipping</h2>
                        <div class="content_calculate_shipping">
                            <select name="country">
                                <option value="vietnam">Vietnam</option>
                                <option value="us">US</option>
                                <option value="uk">UK</option>
                            </select>
                            <div class="conutry_code">
                                <input class="country" type="text" placeholder="State / Country">
                                <input class="zip_code" type="text" placeholder="Post Code / Zip">
                            </div>
                            <button type="submit" class="btn btn-default">Apply coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-5-shopping-cart">
                    <div class="shopping_default coupon_codes">
                        <h2 class="title title_default">coupon codes</h2>
                        <div class="content_coupon_codes">
                            <input type="text" class="form-control" placeholder="Enter your code here !">
                            <button type="submit" class="btn btn-default">Apply coupon</button>
                        </div>
                    </div>
                    <div class="cart_total shopping_default">
                        <h2 class="title title_default">cart totals</h2>
                        <div class="content_cart_total">
                            <p class="cart_subtotal">
                                <span class="text">Cart Subtotal</span>
                                <span class="number">$150.40</span>
                            </p>
                            <p class="shipping_free">
                                <span class="text">Shipping</span>
                                <span class="number">Free Shipping</span>
                            </p>
                            <p class="totals">
                                <span class="text">Totals</span>
                                <span class="number">$150.40</span>
                            </p>
                        </div>
                        <div class="submit_cart_total">
                            <button type="submit" class="update_cart btn btn-default">Update Cart</button>
                            <button type="submit" class="proceed_to_checkout btn btn-default">proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
