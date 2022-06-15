@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('shop') }}">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- cart -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartitems as $c)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{ asset('storage/'.$c->variant->product->thumbnail) }}" alt="" width="90px" />
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{ $c->variant->product->product_name }}</h6>
                                        <h5>Rp. {{ $c->variant->product->price }}</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="{{ $c->quantity }}" />
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">Rp. {{ $c->subtotal }}</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/product/product-3.jpg" alt="" width="90px" />
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Diagonal Textured Cap</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1" />
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 32.50</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/product/product-4.jpg" alt="" width="90px" />
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1" />
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 47.00</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/product/product-1.jpg" alt="" width="90px" />
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1" />
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 30.00</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{ route('shop') }}">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total <span>Rp. {{ $cartitems->sum('subtotal') }}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection