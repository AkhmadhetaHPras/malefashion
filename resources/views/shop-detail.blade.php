@extends('layouts.app')

@section('content')
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <!-- BREADCRUMB -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('shop') }}">Shop</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>

            <!-- DETAIL NAVIGATION -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ asset('storage/'.$p->display1) }}"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ asset('storage/'.$p->display2) }}"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ asset('storage/'.$p->display3) }}"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="{{ asset('storage/'.$p->display4) }}">
                                    <i class="fa fa-play"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{ asset('storage/'.$p->display1) }}" alt="" />
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{ asset('storage/'.$p->display2) }}" alt="" />
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{ asset('storage/'.$p->display3) }}" alt="" />
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{ asset('storage/'.$p->display4) }}" alt="" />
                                <a href="{{ $p->yt_link }}" class="video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h4>{{ $p->product_name }}</h4>
                        <div class="rating">
                            @for($i = 0; $i < $p->rating; $i++)
                                <i class="fa fa-star"></i>
                                @endfor
                                @for($i = 0; $i < 5-$p->rating; $i++)
                                    <i class="fa fa-star-o"></i>
                                    @endfor
                                    <span> - {{ $p->review()->count() }} Reviews</span>
                        </div>
                        <h3>Rp. {{ $p->price }}</h3>
                        <p>
                            {{ $p->short_desc }}
                        </p>
                        <div class="product__details__option">
                            <div class="product__details__option__size">
                                <span>Size:</span>
                                @foreach($p->variant()->get() as $v)
                                <label for="{{ $v->size }}">{{ $v->size }}
                                    <input type="radio" id="{{ $v->size }}" />
                                </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="product__details__cart__option">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" />
                                </div>
                            </div>
                            <a href="#" class="primary-btn">add to cart</a>
                        </div>
                        <div class="product__details__last__option">
                            <h5><span>Guaranteed Safe Checkout</span></h5>
                            <img src="img/payment.webp" alt="" />
                            <ul>
                                <li><span>Categories:</span> {{ $p->category->category }}</li>
                                <li><span>Tag:</span> {{ $p->tags }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer Previews({{ $p->review()->count() }})</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                {!! $p->description !!}
                                <!-- <div class="product__details__tab__content">
                                    <p class="note">
                                        Nam tempus turpis at metus scelerisque placerat nulla
                                        deumantos solicitud felis. Pellentesque diam dolor,
                                        elementum etos lobortis des mollis ut risus. Sedcus
                                        faucibus an sullamcorper mattis drostique des commodo
                                        pharetras loremos.
                                    </p>
                                    <div class="product__details__tab__content__item">
                                        <h5>Products Infomation</h5>
                                        <p>
                                            A Pocket PC is a handheld computer, which features
                                            many of the same capabilities as a modern PC. These
                                            handy little devices allow individuals to retrieve and
                                            store e-mail messages, create a contact file,
                                            coordinate appointments, surf the internet, exchange
                                            text messages and more. Every product that is labeled
                                            as a Pocket PC must be accompanied with specific
                                            software to operate the unit and must feature a
                                            touchscreen and touchpad.
                                        </p>
                                        <p>
                                            As is the case with any new technology product, the
                                            cost of a Pocket PC was substantial during it’s early
                                            release. For approximately $700.00, consumers could
                                            purchase one of top-of-the-line Pocket PCs in 2003.
                                            These days, customers are finding that prices have
                                            become much more reasonable now that the newness is
                                            wearing off. For approximately $350.00, a new Pocket
                                            PC can now be purchased.
                                        </p>
                                    </div>
                                    <div class="product__details__tab__content__item">
                                        <h5>Material used</h5>
                                        <p>
                                            Polyester is deemed lower quality due to its none
                                            natural quality’s. Made from synthetic materials, not
                                            natural like wool. Polyester suits become creased
                                            easily and are known for not being breathable.
                                            Polyester suits tend to have a shine to them compared
                                            to wool and cotton suits, this can make the suit look
                                            cheap. The texture of velvet is luxurious and
                                            breathable. Velvet is a great choice for dinner party
                                            jacket and can be worn all year round.
                                        </p>
                                    </div>
                                </div> -->
                            </div>
                            <div class="tab-pane" id="tabs-6" role="tabpanel">
                                <div class="product__details__tab__content">
                                    @foreach($p->review()->get() as $r)
                                    <div class="product__details__tab__content__item">
                                        <h5>{{ $r->user->username }} <span class="ml-3 text-secondary" style="font-size: 14px; font-weight:400;">{{ $r->post_date }}</span></h5>
                                        <p>
                                            {{ $r->review }}
                                        </p>
                                        <div class="product__details__text text-left">
                                            <div class="rating">
                                                @for($i = 0; $i < $r->rating; $i++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor
                                                    @for($i = 0; $i < 5-$r->rating; $i++)
                                                        <i class="fa fa-star-o"></i>
                                                        @endfor
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- <div class="product__details__tab__content__item">
                                        <h5>Material used</h5>
                                        <p>
                                            Polyester is deemed lower quality due to its none
                                            natural quality’s. Made from synthetic materials, not
                                            natural like wool. Polyester suits become creased
                                            easily and are known for not being breathable.
                                            Polyester suits tend to have a shine to them compared
                                            to wool and cotton suits, this can make the suit look
                                            cheap. The texture of velvet is luxurious and
                                            breathable. Velvet is a great choice for dinner party
                                            jacket and can be worn all year round.
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">Related Product</h3>
            </div>
        </div>
        <div class="row">
            @foreach($relatedproduct->product->take(4) as $p)
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/'.$p->thumbnail) }}">
                        <ul class="product__hover">
                            <li>
                                <a href="{{ route('shop.details', $p) }}"><i class="d-flex justify-content-center align-items-center fa fa-search text-dark"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>{{ $p->product_name }}</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            @for($i = 0; $i < $p->rating; $i++)
                                <i class="fa fa-star"></i>
                                @endfor
                                @for($i = 0; $i < 5-$p->rating; $i++)
                                    <i class="fa fa-star-o"></i>
                                    @endfor
                        </div>
                        <h5>Rp. {{ $p->price }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection