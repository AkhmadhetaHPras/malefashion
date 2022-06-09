@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<div class="row">
  <!-- User Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img class="img-fluid rounded my-4" src="{{asset('admin/img/avatars/10.png')}}" height="110" width="110" alt="User avatar">
            <div class="user-info text-center">
              <h4 class="mb-2">Violet Mendoza</h4>
              <span class="badge bg-label-secondary">Customer</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap my-4 py-3">
          <div class="d-flex align-items-start me-4 mt-3 gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-check bx-sm"></i></span>
            <div>
              <h5 class="mb-0">1.2K</h5>
              <span>Order Done</span>
            </div>
          </div>
          <div class="d-flex align-items-start mt-3 gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-customize bx-sm"></i></span>
            <div>
              <h5 class="mb-0">568</h5>
              <span>Review </span>
            </div>
          </div>
        </div>
        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">Username:</span>
              <span>violet.dev</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Email:</span>
              <span>vafgot@vultukir.org</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Status:</span>
              <span class="badge bg-label-success">Active</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Role:</span>
              <span>Author</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Tax id:</span>
              <span>Tax-8965</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Contact:</span>
              <span>(123) 456-7890</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Languages:</span>
              <span>French</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Country:</span>
              <span>England</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center pt-3">
            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
            <a href="javascript:;" class="btn btn-danger suspend-user">Suspended</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card -->
  </div>
  <!--/ User Sidebar -->

  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- Address list -->
    <div class="card card-action mb-4">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Billing Address</h5>
        <div class="card-action-element">
          <button class="btn btn-primary btn-sm edit-address" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit address</button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-7 col-12">
            <dl class="row mb-0">
              <dt class="col-sm-4 fw-semibold mb-3">Company Name:</dt>
              <dd class="col-sm-8">Sneat</dd>

              <dt class="col-sm-4 fw-semibold mb-3">Billing Email:</dt>
              <dd class="col-sm-8">user@ex.com</dd>

              <dt class="col-sm-4 fw-semibold mb-3">Tax ID:</dt>
              <dd class="col-sm-8">TAX-357378</dd>

              <dt class="col-sm-4 fw-semibold mb-3">VAT Number:</dt>
              <dd class="col-sm-8">SDF754K77</dd>

              <dt class="col-sm-4 fw-semibold mb-3">Billing Address:</dt>
              <dd class="col-sm-8">100 Water Plant <br>Avenue, Building 1303<br> Wake Island</dd>
            </dl>
          </div>
          <div class="col-xl-5 col-12">
            <dl class="row mb-0">
              <dt class="col-sm-4 fw-semibold mb-3">Contact:</dt>
              <dd class="col-sm-8">+1 (605) 977-32-65</dd>

              <dt class="col-sm-4 fw-semibold mb-3">Country:</dt>
              <dd class="col-sm-8">Wake Island</dd>

              <dt class="col-sm-4 fw-semibold mb-3">State:</dt>
              <dd class="col-sm-8">Capholim</dd>

              <dt class="col-sm-4 fw-semibold mb-3">Zipcode:</dt>
              <dd class="col-sm-8">403114</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- /Address List -->

    <!-- Change Password  -->
    <div class="card mb-4">
      <h5 class="card-header">Change Password</h5>
      <div class="card-body">
        <form id="formChangePassword" method="POST" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
          <div class="alert alert-warning" role="alert">
            <h6 class="alert-heading fw-bold mb-1">Ensure that these requirements are met</h6>
            <span>Minimum 8 characters long, uppercase &amp; symbol</span>
          </div>
          <div class="row">
            <div class="mb-3 col-12 col-sm-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="newPassword">New Password</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="············">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>

            <div class="mb-3 col-12 col-sm-6 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Confirm New Password</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="············">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary me-2">Change Password</button>
            </div>
          </div>
          <div></div><input type="hidden">
        </form>
      </div>
    </div>
    <!-- /Change Password  -->

    <!-- Two verification -->
    <div class="card mb-4">
      <div class="card-header">
        <h5 class="card-title mb-2">Two-steps verification</h5>
        <span class="card-subtitle">Keep your account secure with authentication step.</span>
      </div>
      <div class="card-body">
        <h6>SMS</h6>
        <div class="d-flex justify-content-between border-bottom mb-4 pb-2">
          <span>+1(968) 945-8832</span>
          <div class="action-icons">
            <a href="javascript:;" class="text-body me-1" data-bs-target="#enableOTP" data-bs-toggle="modal"><i class="bx bx-edit"></i></a>
            <a href="javascript:;" class="text-body"><i class="bx bx-trash-alt"></i></a>
          </div>
        </div>
        <p class="mb-0">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.
          <a href="javascript:void(0);" class="text-body">Learn more.</a>
        </p>
      </div>
    </div>
    <!-- /Two verification -->


  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
<!-- Edit User Modal -->
<div class="modal fade lead" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Edit User Information</h3>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-3" onsubmit="return false">
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected>Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">+1</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
              <option value="">Select</option>
              <option value="english" selected>English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
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
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Use as a billing address?</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->

<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="address-title">Add New Address</h3>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-3" onsubmit="return false">

          <div class="col-12">
            <div class="row">
              <div class="col-md mb-md-0 mb-3">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Home</span>
                      <small> Delivery time (9am – 9pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-3">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                    <span class="custom-option-body">
                      <i class='bx bx-briefcase'></i>
                      <span class="custom-option-title"> Office </span>
                      <small> Delivery time (9am – 5pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressFirstName">First Name</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLastName">Last Name</label>
            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Country</label>
            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
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
          </div>
          <div class="col-12 ">
            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">Landmark</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">City</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">State</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Use as a billing address?</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->

@endsection

<!-- /Content Section -->