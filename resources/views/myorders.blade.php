@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>My Orders</h4>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <span>My Orders</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="myorders">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#waiting" role="tab">Waiting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#processed" role="tab">Processed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#sent" role="tab">Sent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#completed" role="tab">Completed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#canceled" role="tab">Canceled</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Waiting Confirmation -->
                        <div class="tab-pane active" id="waiting" role="tabpanel">
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">Juni 16, 2022
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">Jl. Mawar No. 15 RT 09/RW 02</div>
                                            <div class="text-right" style="font-size: 14px;">Blitar, East Java</div>
                                            <div class="text-right" style="font-size: 14px;">0861289793</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">Shoes</a></div>
                                        <div class="col text-center">41</div>
                                        <div class="col text-center">1</div>
                                        <div class="col text-right">$75</div>
                                    </div>
                                    <ul class="checkout__total__all">
                                        <li>Total <span>$750.99</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adip elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4"><button type="submit" class="site-btn">CANCEL</button></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Processed -->
                        <div class="tab-pane" id="processed" role="tabpanel">
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">Juni 16, 2022
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">Jl. Mawar No. 15 RT 09/RW 02</div>
                                            <div class="text-right" style="font-size: 14px;">Blitar, East Java</div>
                                            <div class="text-right" style="font-size: 14px;">0861289793</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">Shoes</a></div>
                                        <div class="col text-center">41</div>
                                        <div class="col text-center">1</div>
                                        <div class="col text-right">$75</div>
                                    </div>
                                    <ul class="checkout__total__all">
                                        <li>Total <span>$750.99</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adip elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    Will be sent on <div class="text-right" style="font-size: 22px;"><b>12 June 2022</b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Sent -->
                        <div class="tab-pane" id="sent" role="tabpanel">
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">Juni 16, 2022
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">Jl. Mawar No. 15 RT 09/RW 02</div>
                                            <div class="text-right" style="font-size: 14px;">Blitar, East Java</div>
                                            <div class="text-right" style="font-size: 14px;">0861289793</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">Shoes</a></div>
                                        <div class="col text-center">41</div>
                                        <div class="col text-center">1</div>
                                        <div class="col text-right">$75</div>
                                    </div>
                                    <ul class="checkout__total__all">
                                        <li>Total <span>$750.99</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adip elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Completed -->
                        <div class="tab-pane" id="completed" role="tabpanel">
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">Juni 16, 2022
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">Jl. Mawar No. 15 RT 09/RW 02</div>
                                            <div class="text-right" style="font-size: 14px;">Blitar, East Java</div>
                                            <div class="text-right" style="font-size: 14px;">0861289793</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">Shoes</a></div>
                                        <div class="col text-center">41</div>
                                        <div class="col text-center">1</div>
                                        <div class="col text-right">$75</div>
                                    </div>
                                    <ul class="checkout__total__all">
                                        <li>Total <span>$750.99</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adip elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 align-bottom text-right"><b>COMPLETED</b></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Canceled -->
                        <div class="tab-pane" id="canceled" role="tabpanel">
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">Juni 16, 2022
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">Jl. Mawar No. 15 RT 09/RW 02</div>
                                            <div class="text-right" style="font-size: 14px;">Blitar, East Java</div>
                                            <div class="text-right" style="font-size: 14px;">0861289793</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">Shoes</a></div>
                                        <div class="col text-center">41</div>
                                        <div class="col text-center">1</div>
                                        <div class="col text-right">$75</div>
                                    </div>
                                    <ul class="checkout__total__all">
                                        <li>Total <span>$750.99</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adip elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 align-bottom text-right"><b>CANCELED</b></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection