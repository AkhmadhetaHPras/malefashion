@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>My Orders</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
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
                            @if($waiting->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($waiting as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ $p->subtotal }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ $o->total }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4"><button class="site-btn" data-toggle="modal" data-target="#cancelorder{{$o->id}}">CANCEL</button></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal  Confirmation Cancel-->
                            <div class="modal fade" id="cancelorder{{$o->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cancelordertitle">Confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to cancel this order?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="button" type="submit" class="site-btn">Yes</button>
                                                <button type="button" class="site-btn-outline" data-dismiss="modal">No</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Processed -->
                        <div class="tab-pane" id="processed" role="tabpanel">
                            @if($processed->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($processed as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <a href="" class="text-primary">Download Invoice</a>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}

                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ $p->subtotal }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ $o->total }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
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
                            @endforeach
                            @endif
                        </div>

                        <!-- Sent -->
                        <div class="tab-pane" id="sent" role="tabpanel">
                            @if($sent->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($sent as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <a href="" class="text-primary">Download Invoice</a>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ $p->subtotal }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ $o->total }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Completed -->
                        <div class="tab-pane" id="completed" role="tabpanel">
                            @if($completed->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($completed as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right"></div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">
                                            @if(\App\Models\Review::where('order_id', $o->id)->where('product_id', $p->variant->product->id)->get()->isEmpty())
                                            <a href="#" class="text-dark" data-toggle="modal" data-target="#reviewmodal{{$p->id}}">REVIEW</a>
                                            @else
                                            Rp. {{ $p->subtotal }}
                                            @endif
                                        </div>

                                        <!-- Modal review-->
                                        <div class="modal fade" id="reviewmodal{{$p->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
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
                                                                                <div class="product__cart__item row mb-2">
                                                                                    <div class="product__cart__item__pic col-4">
                                                                                        <img src="{{ asset('storage/'.$p->variant->product->thumbnail) }}" alt="" width="90px" />
                                                                                    </div>
                                                                                    <div class="product__cart__item__text col-8">
                                                                                        <h6 class="mb-0">{{ $p->variant->product->product_name }}</h6>
                                                                                        <p class="mb-1" style="font-size: 14px;">Size : {{ $p->variant->size }}</p>
                                                                                        <h5>Rp. {{ $p->variant->product->price }}</h5>
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
                                                                            <textarea placeholder="Message" name="review"></textarea>
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
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ $o->total }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 align-bottom text-right"><b>COMPLETED</b></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Canceled -->
                        <div class="tab-pane" id="canceled" role="tabpanel">
                            @if($canceled->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($canceled as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div style=" font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->telp }}</div>
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
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection