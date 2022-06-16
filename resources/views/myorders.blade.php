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
                                        <div class="col text-right"></div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">Shoes</a></div>
                                        <div class="col text-center">41</div>
                                        <div class="col text-center">1</div>
                                        <div class="col text-right" data-toggle="modal" data-target="#reviewmodal"><a href="#" class="text-dark">REVIEW</a></div>

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
                        <!-- Modal review-->
                        <div class="modal fade" id="reviewmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Review</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="review-form">
                                            <div class="contact__form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="product__details__option__size">
                                                                <div class="product__cart__item row">
                                                                    <div class="product__cart__item__pic col-6">
                                                                        <img src="img/sale.png" alt="" width="90px" />
                                                                    </div>
                                                                    <div class="product__cart__item__text col-6">
                                                                        <h6>asd</h6>
                                                                        <h5>Rp. 12</h5>
                                                                    </div>
                                                                </div>
                                                                <span>Rating:</span>
                                                                <label for="1">1
                                                                    <input type="radio" id="1" value="1" name="rating" />
                                                                </label>
                                                                <label for="2">2
                                                                    <input type="radio" id="2" value="2" name="rating" />
                                                                </label>
                                                                <label for="3">3
                                                                    <input type="radio" id="3" value="3" name="rating" />
                                                                </label>
                                                                </label>
                                                                <label for="4">4
                                                                    <input type="radio" id="4" value="4" name="rating" />
                                                                </label>
                                                                </label>
                                                                <label for="5">5
                                                                    <input type="radio" id="5" value="5" name="rating" />
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <textarea placeholder="Message"></textarea>
                                                            <button type="submit" class="site-btn">Post Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
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