@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<!-- statistic users start -->
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Session</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,459</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>Total Users</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Paid Users</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">4,567</h4>
              <small class="text-success">(+18%)</small>
            </div>
            <small>Last week analytics </small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user-plus bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Active Users</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">19,860</h4>
              <small class="text-danger">(-14%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Pending Users</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">237</h4>
              <small class="text-success">(+42%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-warning rounded p-2">
            <i class="bx bx-user-voice bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- statistic users end -->

<!-- Users List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title">Search Filter</h5>
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
      <!-- Select Role -->
      <div class="col-md-4 user_role">
        <select id="UserRole" class="form-select text-capitalize">
          <option value=""> Select Role </option>
          <option value="Admin">Admin</option>
          <option value="Customer">Customer</option>          
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
              <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                <span>
                  <i class="bx bx-plus me-0 me-sm-2"></i>
                  <span class="d-none d-lg-inline-block">Add New User</span>
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
            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th>
            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 257px;" aria-label="User: activate to sort column ascending" aria-sort="descending">User</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 121px;" aria-label="Role: activate to sort column ascending">Role</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 77px;" aria-label="Plan: activate to sort column ascending">Username</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 110px;" aria-label="Billing: activate to sort column ascending">Gender</th>            
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 138px;" aria-label="Actions">Actions</th>
          </tr>
        </thead>

        <tbody>
          <!-- user -->
          @foreach($users as $u)
          <tr class="odd">
            <td class=" control" tabindex="0"></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('storage/'.$u->photo)}}" alt="Avatar" class="rounded-circle">                    
                  </div>
                </div>
                <!-- Name & email-->
                <div class="d-flex flex-column">
                  <a href="{{ route('users-view') }}" class="text-body text-truncate">
                    <span class="fw-semibold">{{$u->name}}</span>
                  </a>
                  <small class="text-muted">{{$u->email}}</small>
                </div>
              </div>
            </td>
            <!-- roles -->
            <td>
              <span class="text-truncate d-flex align-items-center">                
                @if($u->role == 'Admin')
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2">
                  <i class="bx bx-cog bx-xs"></i></span>Admin
                @elseif($u->role == 'Customer')
                <span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2">
                  <i class="bx bx-user bx-xs"></i></span>Customer                
                @endif
              </span>
            </td>
            <!-- username -->
            <td><span class="fw-semibold">{{$u->username}}</span></td>
            <!-- Gender -->
            <td>{{$u->gender}}</td>            
            <td>
              <div class="d-inline-block">
                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('users-view') }}" class="dropdown-item">View</a>
                  <a href="javascript:;" class="dropdown-item">Suspend</a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach          
          <!-- /user -->          
        </tbody>
      </table>
      <!-- Tabel end -->

      <div class="row mx-2">        
        {{$users->links()}}
      </div>
    </div>
  </div>
  <!-- Tabel End -->

  <!-- Offcanvas to add new user -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">
      <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm" onsubmit="return false" novalidate="novalidate">
        <div class="mb-3 fv-plugins-icon-container">
          <label class="form-label" for="add-user-username"> Userame</label>
          <div class="input-group">
            <span class="input-group-text" id="basic-addon11">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="mb-3 fv-plugins-icon-container">
          <label class="form-label" for="add-user-fullname">Full Name</label>
          <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe">
          <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="mb-3 fv-plugins-icon-container">
          <label class="form-label" for="add-user-email">Email</label>
          <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail">
          <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="add-user-contact">Contact</label>
          <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact">
        </div>
        <div class="mb-3">
          <label class="form-label" for="gender">Gender</label>
          <select id="gender" class="form-select">
            <option value="female">Female</option>
            <option value="male">Male</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label" for="birth">Birth</label>
          <input type="date" id="birth" class="form-control" placeholder="dd/mm/yyy" aria-label="jdoe1" name="birth">
        </div>
        <div class="mb-3">
          <label class="form-label" for="country">Country</label>
          <div class="position-relative"><select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 335px;">
              <span class="selection">
                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container">
                  <span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true">
                    <span class="select2-selection__placeholder h6">Select Country</span>
                  </span>
                  <span class="select2-selection__arrow" role="presentation">
                    <b role="presentation"></b>
                  </span>
                </span>
              </span>
              <span class="dropdown-wrapper" aria-hidden="true"></span>
            </span>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="user-role">User Role</label>
          <select id="user-role" class="form-select">
            <option value="customer">Customer</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="mb-3 fv-plugins-icon-container">
          <div class="form-password-toggle">
            <label class="form-label" for="basic-default-password12">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="basic-default-password12" placeholder="············" aria-describedby="basic-default-password2">
              <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
          </div>
          <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        <div></div><input type="hidden">
      </form>
    </div>
  </div>
</div>


@endsection

<!-- /Content Section -->