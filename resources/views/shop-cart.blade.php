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
                <div id="delitemresponse"></div>
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
                        <tbody id="tbodycart">
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
                                            <input type="text" id="{{ $c->id }}" value="{{ $c->quantity }}" />
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price" id="cart-price{{$c->id}}">Rp. {{ $c->subtotal }}</td>
                                <td class="cart__close"><i class="fa fa-close btn-delete" onclick='deleteitem("{{$c->id}}")'></i></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{ route('shop') }}">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total <span id="totalpricecart">Rp. {{ $cartitems->sum('subtotal') }}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $(document).on('click', '.pro-qty-2', function(e) {
            // console.log($(this).children('input').attr('id'));

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $(this).children('input').attr('id');
            var data = {
                'qty': $(this).children('input').val(),
            }
            $.ajax({
                type: "put",
                url: "/cart/" + id,
                data: data,
                dataType: "json",
                success: function(response) {
                    $('.price').text(response.total);
                    $('#cart-price' + id).text('Rp. ' + response.subtotal);
                    $('#totalpricecart').text('Rp. ' + response.total);
                },
            });
        });
    });

    function fetchitemcart() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "get",
            url: "/cart-fetch",
            dataType: "json",
            success: function(response) {
                $('#tbodycart').html("");
                $.each(response.cart, function(key, item) {
                    $('#tbodycart').append(
                        "<tr>" +
                        "<td class='product__cart__item'>" +
                        "<div class='product__cart__item__pic'>" +
                        "<img src='storage/" + item.variant.product.thumbnail + "' alt='' width='90px' />" +
                        "</div>" +
                        "<div class ='product__cart__item__text'>" +
                        "<h6>" + item.variant.product.product_name + "</h6>" +
                        "<h5>Rp. " + item.variant.product.price + "</h5>" +
                        "</div>" +
                        "</td>" +
                        "<td class = 'quantity__item'>" +
                        "<div class = 'quantity'>" +
                        "<div class = 'pro-qty-2'>" +
                        "<input type = 'text' id = '" + item.id + "' value = '" + item.quantity + "'/>" +
                        "</div>" +
                        "</div>" +
                        "</td>" +
                        "<td class = 'cart__price' id = 'cart-price" + item.id + "'>Rp. " + item.subtotal + "</td>" +
                        "<td class = 'cart__close' ><i class = 'fa fa-close btn-delete' onclick = 'deleteitem(" + item.id + ")'></i></td>" +
                        "</tr>"
                    );
                });
            }
        });
    }

    function deleteitem(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "delete",
            url: "/cart/" + id,
            data: id,
            dataType: "json",
            success: function(response) {
                // berhasil
                $('.price').text(response.total);
                $('.badge.rounded-pill.bg-warning.text-dark').text(response.nitem);
                $('#totalpricecart').text('Rp. ' + response.total);

                $('#delitemresponse').html("");
                $('#delitemresponse').html("<div class='alert alert-success' role='alert'></div>");
                $('#delitemresponse .alert-success').text(response.message);

                window.setTimeout(function() {
                    $(".alert").fadeTo(500, 0).slideUp(500, function() {
                        $(this).remove();
                    });
                }, 4000);

                fetchitemcart();
            }
        });
    }
</script>
@endsection