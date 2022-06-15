@extends('admin.layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-9">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
            <p class="mb-4">
              You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
              your profile.
            </p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-3 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('admin/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 mb-4 order-0">
    <div class="row">
      <div class="col-3 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded" />
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Sales</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
          </div>
        </div>
      </div>
      <div class="col-3 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/product.png')}}" alt="chart success" class="rounded" />
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Products</span>
            <h3 class="card-title mb-2">$12,628</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/user.png')}}" alt="Credit Card" class="rounded" />
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block mb-1">Users</span>
            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/rating.png')}}" alt="Credit Card" class="rounded" />
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Ratings</span>
            <h3 class="card-title mb-2">$14,857</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/briefcase.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block">Transactions</span>
            <h3 class="card-title mb-2">$14,857</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between pb-0">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">Order Statistics</h5>
              <small class="text-muted">42.82k Total Sales</small>
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-2">8,258</h2>
                <span>Total Orders</span>
              </div>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-check-square'></i></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Completed</h6>                   
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">82.5k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-success"><i class='bx bx-credit-card'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Paid</h6>                   
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">23.8k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-info"><i class='bx bx-send'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Sent</h6>                    
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">849k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-loader-circle'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Processed</h6>                    
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">849k</small>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-time-five'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Waiting Confirmations</h6>                  
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">99</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Order Statistics -->

      <!-- Transactions -->
      <div class="col-md-6 col-lg-8 order-2 mb-4">
        <div class="card h-100">
          <div style="padding-bottom: 1px;" class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">
              <img src="{{asset('admin/img/icons/unicons/winner.png')}}" alt="Oneplus" height="32" width="32">
              Best Products
            </h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
              <tr>
                  <th style=" width: 20%;">Product</th>
                  <th style="width: 20%;">Category</th>
                  <th style="width: 15%;">Price</th>
                  <th style="width: 10%;">Rating</th>                  
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('admin/img/icons/products/oneplus.png')}}" alt="Oneplus" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">Manchester United Bottle 750 Ml</span>
                        <small class="text-muted">Unisex, Lifestyle</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class='bx bx-shopping-bag bx-xs'></i></span>Bags</td>
                  <td>
                    <div class="text-muted lh-1"><span class="text-primary fw-semibold">Rp 120.000</span></div>                  
                  </td>
                  <td><span class="badge bg-label-success">5</span></td>                  
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('admin/img/icons/products/magic-mouse.png')}}" alt="Apple" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">Predator Edge.3 Laceless Firm Ground</span>
                        <small class="text-muted">Unisex, Football</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class='bx bxs-t-shirt bx-xs'></i></span> Cloths</td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">Rp 2.700.000</span></div>                    
                  </td>
                  <td><span class="badge bg-label-success">5</span></td>                 
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('admin/img/icons/products/imac-pro.png')}}" alt="Apple" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">iMac Pro</span>
                        <small class="text-muted">Apple</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-info rounded-pill badge-center p-3 me-2"><i class='bx bx-shape-polygon bx-xs'></i></i></span> Accessories</td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">Rp 2.700.000</span></div>                    
                  </td>
                  <td><span class="badge bg-label-warning">4.3</span></td>                
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('admin/img/icons/products/note10.png')}}" alt="Samsung" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">Note 10</span>
                        <small class="text-muted">Samsung</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class='bx bx-heart-circle bx-xs'></i></i></span> Shoes</td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">Rp 2.700.000</span></div>                   
                  </td>
                  <td><span class="badge bg-label-success">4.7</span></td>                  
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('admin/img/icons/products/magic-mouse.png')}}" alt="Apple" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">Magic Mouse</span>
                        <small class="text-muted">Apple</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class='bx bxs-t-shirt bx-xs'></i></span> Cloths</td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">Rp 2.700.000</span></div>                   
                  </td>
                  <td><span class="badge bg-label-warning">4.4</span></td>                  
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('admin/img/icons/products/oneplus.png')}}" alt="Oneplus" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">OnePlus 7Pro</span>
                        <small class="text-muted">OnePlus</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class='bx bx-shopping-bag bx-xs'></i></span>Bags</td>
                  <td>
                    <div class="lh-1"><span class="text-primary fw-semibold">Rp 2.700.000</span></div>                 
                  </td>
                  <td><span class="badge bg-label-success">5</span></td>                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--/ Transactions -->
    </div>
  </div>
</div>
@endsection