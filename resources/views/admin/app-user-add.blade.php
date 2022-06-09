@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users/</span> Add</h3>
<div class="col-xxl">
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h4 class="mb-2">Add User</h4>
      <small class="text-muted float-end">Mensweaer</small>
    </div>
    <div class="card-body">
      <form>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Photo</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="inputGroupFile02">
              <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Username</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon11">@</span>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Full Name</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe">
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Email</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group input-group-merge">
              <input type="email" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" name="userEmail">
              <span class="input-group-text" id="basic-default-email2">@example.com</span>
            </div>
            <div class="form-text">You can use letters, numbers &amp; periods</div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Contact</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone">
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Gender</h6>
          </label>
          <div class="col-sm-10">
            <select id="gender" class="form-select">
              <option value="female">Female</option>
              <option value="male">Male</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Birth</h6>
          </label>
          <div class="col-sm-10">
            <input type="date" id="birth" class="form-control" placeholder="dd/mm/yyy" aria-label="jdoe1" name="birth">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Country</h6>
          </label>
          <div class="col-sm-10">
            <div class="position-relative">
              <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
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
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Role</h6>
          </label>
          <div class="col-sm-10">
            <select id="user-role" class="form-select">
              <option value="customer">Customer</option>
              <option value="admin">Admin</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Password</h6>
          </label>
          <div class="col-sm-10">
            <div class="form-password-toggle">
              <label class="form-label" for="basic-default-password12">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="basic-default-password12" placeholder="············" aria-describedby="basic-default-password2">
                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

<!-- /Content Section -->