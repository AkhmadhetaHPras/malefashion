@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<!-- Users List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title">Search Filter</h5>
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
      <!-- Select Role -->
      <div class="col-md-4 user_role">
        <select id="UserRole" class="form-select text-capitalize">
          <option value=""> Select Brand </option>
          <option value="Adidas Originals">Adidas Originals</option>
          <option value="Adidas Neo">Adidas Neo</option>
          <option value="Athletics">Athletics</option>
          <option value="Stella Mccartney">Stella Mccartney</option>
        </select>
      </div>
      <!-- Select Plan -->
      <div class="col-md-4 user_plan">
        <select id="UserPlan" class="form-select text-capitalize">
          <option value=""> Select Category </option>
          <option value="Accessories">Accessories</option>
          <option value="Bags">Bags</option>
          <option value="Cloths">Cloths</option>
          <option value="Shoes">Shoes</option>
        </select>
      </div>
      <!-- Select Status -->
      <div class="col-md-4 user_status">
        <select id="FilterTransaction" class="form-select text-capitalize">
          <option value=""> Select Tags </option>
          <option value="Unisex" class="text-capitalize">Unisex</option>
          <option value="Lifestyle" class="text-capitalize">Lifestyle</option>
          <option value="Men" class="text-capitalize">Men</option>
          <option value="Golf" class="text-capitalize">Golf</option>
          <option value="Skateboarding" class="text-capitalize">Skateboarding</option>
          <option value="Others" class="text-capitalize">Others</option>
        </select>
      </div>
    </div>
  </div>
  <!-- Tabel Start -->
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <!-- Option Table Start -->
      <div class="row mx-2">

        <!-- data show start -->
        <div class="col-md-2">
          <div class="me-3">
            <div class="dataTables_length" id="DataTables_Table_0_length">
              <label>
                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </label>
            </div>
          </div>
        </div>
        <!-- data show end -->

        <!-- Button table start -->
        <div class="col-md-10">
          <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
            <!-- Search field -->
            <div id="DataTables_Table_0_filter" class="dataTables_filter">
              <label>
                <input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_0">
              </label>
            </div>
            <!-- /Search field -->

            <div class="dt-buttons">
              <!-- btn export -->
              <button class="dt-button buttons-collection btn btn-label-secondary dropdown-toggle mx-3" abindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true" aria-expanded="false">
                <span><i class="bx bx-upload me-2"></i>Export</span>
              </button>
              <!-- /btn export -->
              <!-- btn add user -->
              <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="location.href='app-product-add.html'">
                <span>
                  <i class="bx bx-plus me-0 me-sm-2"></i>
                  <span class="d-none d-lg-inline-block">Add New Products</span>
                </span>
              </button>
              <!-- /btn add user -->
            </div>
          </div>
        </div>
        <!-- Button table end -->

      </div>
      <!-- Option Table End -->

      <!-- Tabel start -->
      <table class="datatables-users table border-top dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1040px;">

        <thead>
          <tr role="row">           
            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 80px;" aria-label="User: activate to sort column ascending" aria-sort="descending">#ID</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 212px;" aria-label="Role: activate to sort column ascending">Products</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 152px;" aria-label="Plan: activate to sort column ascending">Category</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 204px;" aria-label="Billing: activate to sort column ascending">Tags</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 186px;" aria-label="Status: activate to sort column ascending">Harga</th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 148px;" aria-label="Actions">Actions</th>
          </tr>
        </thead>

        <tbody>
          <!-- product1 -->
          <tr class="odd">            
            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('admin/img/icons/products/DUFFEL-BAG_ESSENTIALS_LOGO EKSTRA_KECIL.jpg')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <!-- Name & email-->
                <div class="d-flex flex-column">
                  <a href="{{ route('products-view') }}" class="text-body text-truncate">
                    <span class="fw-semibold">DUFFEL BAG ESSENTIALS</span>
                  </a>
                  <small class="text-muted">Unisex;Men</small>
                </div>
              </div>
            </td>
            <!-- roles -->
            <td>
              <span class="text-truncate d-flex align-items-center">
                <span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2">
                  <i class='bx bx-shopping-bag bx-xs'></i></span>
                Bags
              </span>
            </td>
            <!-- Tags -->
            <td><span class="fw-semibold">Adidas Originals</span></td>
            <!-- Price -->
            <td>Rp 149.000</td>

            <td>
              <div class="d-inline-block">
                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('products-view') }}" class="dropdown-item">View</a>
                  <a href="{{ route('products-edit') }}" class="dropdown-item">Edit</a>
                  <a href="javascript:;" class="dropdown-item">Suspend</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <!-- /product1 -->

          <!-- product2 -->
          <tr class="even">           
            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('admin/img/icons/products/BUCKET-HAT.jpg')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="{{ route('products-view') }}" class="text-body text-truncate"><span class="fw-semibold">BUCKET HAT</span></a>
                  <small class="text-muted">Unisex;Men</small>
                </div>
              </div>
            </td>
            <td><span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2">
                  <i class='bx bxs-t-shirt bx-xs'></i></span> Cloths</span></td>
            <!-- Brands -->
            <td><span class="fw-semibold">Adidas Originals</span></td>
            <!-- Price -->
            <td>Rp 149.000</td>

            <td>
              <div class="d-inline-block"><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('products-view') }}" class="dropdown-item">View</a>
                  <a href="{{ route('products-edit') }}" class="dropdown-item">Edit</a>
                  <a href="javascript:;" class="dropdown-item">Suspend</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <!-- /product2 -->

          <!-- product3 -->
          <tr class="odd">
            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('admin/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column"><a href="{{ route('products-view') }}" class="text-body text-truncate"><span class="fw-semibold">Wesley
                      Burland</span></a><small class="text-muted">Unisex;Men</small></div>
              </div>
            </td>
            <td><span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30 me-2">
                  <i class='bx bx-shape-polygon bx-xs'></i></i></span> Accessories</span></td>
            <!-- Brands -->
            <td><span class="fw-semibold">Adidas Originals</span></td>
            <!-- Price -->
            <td>Rp 149.000</td>

            <td>
              <div class="d-inline-block"><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('products-view') }}" class="dropdown-item">View</a>
                  <a href="{{ route('products-edit') }}" class="dropdown-item">Edit</a>
                  <a href="javascript:;" class="dropdown-item">Suspend</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <!-- /product3 -->

          <!-- product4 -->
          <tr class="even"> 
            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <span class="avatar-initial rounded-circle bg-label-dark">VK</span>
                  </div>
                </div>
                <div class="d-flex flex-column"><a href="app-user-view-account.html" class="text-body text-truncate"><span class="fw-semibold">Vladamir
                      Koschek</span></a><small class="text-muted">Unisex;Men</small></div>
              </div>
            </td>
            <td><span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2">
                  <i class='bx bx-shape-polygon bx-xs'></i></i></span> Accessories</span></td>
            <!-- Brands -->
            <td><span class="fw-semibold">Adidas Originals</span></td>
            <!-- Price -->
            <td>Rp 149.000</td>

            <td>
              <div class="d-inline-block"><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('products-view') }}" class="dropdown-item">View</a>
                  <a href="{{ route('products-edit') }}" class="dropdown-item">Edit</a>
                  <a href="javascript:;" class="dropdown-item">Suspend</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <!-- /product4 -->

          <!-- product5 -->
          <tr class="odd">            
            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <span class="avatar-initial rounded-circle bg-label-danger">TW</span>
                  </div>
                </div>
                <div class="d-flex flex-column"><a href="{{ route('products-view') }}" class="text-body text-truncate"><span class="fw-semibold">Tyne Widmore</span></a><small class="text-muted">Unisex;Men</small></div>
              </div>
            </td>
            <td><span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2">
                  <i class='bx bx-heart-circle bx-xs'></i></i></span> Shoes</td>
            <!-- Brands -->
            <td><span class="fw-semibold">Adidas Originals</span></td>
            <!-- Price -->
            <td>Rp 149.000</td>

            <td>
              <div class="d-inline-block"><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('products-view') }}" class="dropdown-item">View</a>
                  <a href="{{ route('products-edit') }}" class="dropdown-item">Edit</a>
                  <a href="javascript:;" class="dropdown-item">Suspend</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <!-- /product5 -->

          <!-- product6 -->
          <tr class="even">            
            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <span class="avatar-initial rounded-circle bg-label-success">TB</span>
                  </div>
                </div>
                <div class="d-flex flex-column"><a href="{{ route('products-view') }}" class="text-body text-truncate"><span class="fw-semibold">Travus
                      Bruntjen</span></a><small class="text-muted">Unisex;Men</small></div>
              </div>
            </td>
            <td><span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30 me-2">
                  <i class='bx bx-heart-circle bx-xs'></i></i></span> Shoes</span></td>
            <!-- Brands -->
            <td><span class="fw-semibold">Adidas Originals</span></td>
            <!-- Price -->
            <td>Rp 149.000</td>

            <!-- <td><span class="badge bg-label-success">Active</span></td> -->
            <td>
              <div class="d-inline-block"><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('products-view') }}" class="dropdown-item">View</a>
                  <a href="{{ route('products-edit') }}" class="dropdown-item">Edit</a>
                  <a href="javascript:;" class="dropdown-item">Suspend</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <!-- /product6 -->

        </tbody>
      </table>
      <!-- Tabel end -->

      <div class="row mx-2">
        <div class="col-sm-12 col-md-6">
          <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing
            1 to 10 of 50 entries</div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <ul class="pagination">
              <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
              <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
              <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tabel End -->
</div>

@endsection

<!-- /Content Section -->