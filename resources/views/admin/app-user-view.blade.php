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
            <img class="img-fluid rounded my-4" src="{{asset('storage/'.$users->photo)}}" height="110" width="110" alt="User avatar">
            <div class="user-info text-center">
              <h4 class="mb-2">{{$users->name}}</h4>
              <span class="badge bg-label-secondary">{{$users->role}}</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap my-4 py-3">
          <div class="d-flex align-items-start me-4 gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-check bx-sm"></i></span>
            <div>
              <h5 class="mb-0">{{$users->order->count()}}</h5>
              <span>Order Done</span>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-customize bx-sm"></i></span>
            <div>
              <h5 class="mb-0">{{$users->review->count()}}</h5>
              <span>Review </span>
            </div>
          </div>
        </div>
        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">Username:</span>
              <span>{{$users->username}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Full Name:</span>
              <span>{{$users->name}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Email:</span>
              <span>{{$users->email}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Birth:</span>
              <span>{{$users->birth}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Gender:</span>
              <span>{{$users->gender}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Role:</span>
              <span>{{$users->role}}</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center pt-3">
            <a href="javascript:;" class="btn btn-danger me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
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
        <h5 class="card-action-title mb-0">Address</h5>
      </div>
      <div class="card-body">

        @foreach($users->address as $ua)
        <div class="row">
          <div class="col-xl-6 col-12">
            <dl class="row mb-0">
              <dt class="col-sm-4 fw-semibold mb-3">Name:</dt>
              <dd class="col-sm-8">{{$ua->name}}</dd>

              <dt class="col-sm-4 fw-semibold">Contact:</dt>
              <dd class="col-sm-8">{{$ua->telp}}</dd>
            </dl>
          </div>
          <div class="col-xl-6 col-12">
            <dl class="row mb-2">
              <dt class="col-sm-4 fw-semibold mb-2">Street:</dt>
              <dd class="col-sm-8">{{$ua->street_address}}</dd>

              <dt class="col-sm-4 fw-semibold mb-2">City:</dt>
              <dd class="col-sm-8">{{$ua->city}}</dd>

              <dt class="col-sm-4 fw-semibold mb-2">Postal Code:</dt>
              <dd class="col-sm-8">{{$ua->postal_code}}</dd>

              <dt class="col-sm-4 fw-semibold">Province</dt>
              <dd class="col-sm-8">{{$ua->province}}</dd>
            </dl>
          </div>
        </div>

        <div class="border-bottom mb-3"></div>
        @endforeach

      </div>
    </div>
    <!-- /Address List -->

    @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div id="passwdresponse">
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      @if ($message = Session::get('error'))
      <div class="alert alert-error">
        <p>{{ $message }}</p>
      </div>
      @endif
    </div>

    <!-- Change Password  -->
    <div class="card mb-4">
      <h5 class="card-header">Change Password</h5>
      <div class="card-body">
        <form id="formChangePassword" method="GET" action="{{route('ad-changePasswd', $users->id)}}" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
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
                <input class="form-control" type="password" name="newPassword_confirmation" id="confirmPassword" placeholder="············">
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
        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Photo</h6>
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile02" name="photo">
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
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11" name="username" required>
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Full Name</h6>
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="fullname" aria-label="John Doe" required>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Email</h6>
            </label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input type="email" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" name="email" required>
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
              <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" name="contact" required>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Gender</h6>
            </label>
            <div class="col-sm-10">
              <select id="gender" class="form-select" name="gender" required>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Birth</h6>
            </label>
            <div class="col-sm-10">
              <input type="date" id="birth" class="form-control" placeholder="dd/mm/yyy" aria-label="jdoe1" name="birth" required>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Role</h6>
            </label>
            <div class="col-sm-10">
              <select id="user-role" class="form-select" name="role" required>
                <option value="Customer">Customer</option>
                <option value="Admin">Admin</option>
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
                  <input type="password" class="form-control" id="basic-default-password12" placeholder="············" aria-describedby="basic-default-password2" name="passwd" required>
                  <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name"></label>
            <div class="col-sm-10">
              <div class="form-password-toggle">
                <label class="form-label" for="basic-default-password12">Password Confirmation</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="basic-default-password12" placeholder="············" aria-describedby="basic-default-password2" name="passwd_confirmation" required>
                  <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Street</h6>
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add-user-street" placeholder="street" name="street" required>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Address</h6>
            </label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-4">
                  <label class="form-label">Post Code</label>
                  <input type="text" class="form-control" id="add-user-city" placeholder="Post Code" name="post_code" required>
                  <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label">City</label>
                  <input type="text" class="form-control" id="add-user-city" placeholder="City" name="city" required>
                  <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label">Province</label>
                  <input type="text" class="form-control" id="add-user-city" placeholder="Provice" name="province" required>
                  <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
              </div>
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
</div>
<!--/ Edit User Modal -->

@endsection

<!-- /Content Section -->

@section('scriptJS')
<script>
  window.setTimeout(function() {
    $("#passwdresponse .alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 4000);
</script>
@endsection