@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Profile</h4>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <span>Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profile">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <img src="img/instagram/instagram-3.jpg" alt="" />
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile__detail">
                            <p style="font-size: 32px;"><b>Akhmadheta Hafid Prasetyawan</b> <span><i class="fa fa-female ml-5"></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile__detail">
                            <p class="text-dark">akhmadheta097@gmail.com | <span class="text-secondary">085803056443</span></p>
                            <p><span style="font-size: 20px;">16/07/2001</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile__detail">
                            <p>Jl. Merdeka No. 12, Blitar, East Java</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="site-btn-outline" data-toggle="modal" data-target="#addaddress">New Address</button>
                        <button type="button" class="site-btn ml-2" data-toggle="modal" data-target="#editprofile">Edit Profile</button>
                        <button type="button" class="site-btn" data-toggle="modal" data-target="#editcredentials">Edit Credentials</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- address table -->
        <div class="row mt-3">
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Streat Address</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">City</th>
                            <th scope="col">Province</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Mark</th>
                            <td>091279381723</td>
                            <td>Jl Merdeka No. 12</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td><i class="fa fa-edit mr-3"></i><i class="fa fa-trash"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- modal new address -->
<div class="modal fade" id="addaddress" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Addreess</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div id="aaresponse">
                    </div>
                    <div class="checkout__input">
                        <p>Name<span>*</span></p>
                        <input type="text" id="aaname" class="checkout__input__add" autofocus required />
                    </div>
                    <div class="checkout__input">
                        <p>Telp<span>*</span></p>
                        <input type="text" id="aatelp" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Street Address<span>*</span></p>
                        <input type="text" id="aaaddress" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Postal Code<span>*</span></p>
                        <input type="text" id="aapostalcode" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>City<span>*</span></p>
                        <input type="text" id="aacity" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Province<span>*</span></p>
                        <input type="text" id="aaprovince" required value="" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="site-btn" id="aasubmitbtn" value="Submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal edit profile -->
<div class="modal fade" id="editprofile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div id="epresponse">
                    </div>
                    <div class="checkout__input">
                        <p>Name<span>*</span></p>
                        <input type="text" id="epname" class="checkout__input__add" autofocus required />
                    </div>
                    <div class="checkout__input">
                        <p>Gender<span>*</span></p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="epgender" id="epgendermale" value="Male" checked />
                        <label class="form-check-label" for="epgendermale">
                            Male
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="epgender" id="epgenderfemale" value="Female" />
                        <label class="form-check-label" for="epgenderfemale">
                            Female
                        </label>
                    </div>
                    <div class="checkout__input">
                        <p>Telp<span>*</span></p>
                        <input type="text" id="eptelp" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Birth<span>*</span></p>
                        <input type="date" id="epbirth" required value="" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="site-btn" id="epsubmitbtn" value="Submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal edit credentials -->
<div class="modal fade" id="editcredentials" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div id="ecresponse">
                    </div>
                    <div class="checkout__input">
                        <p>Email<span>*</span></p>
                        <input type="email" id="ecemail" class="checkout__input__add" autofocus required />
                    </div>
                    <div class="checkout__input">
                        <p>Username<span>*</span></p>
                        <input type="text" id="ecusername" class="checkout__input__add" autofocus required />
                    </div>
                    <div class="checkout__input">
                        <p>Current Password<span>*</span></p>
                        <input type="password" id="ecpassword" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>New Password<span>*</span></p>
                        <input type="password" id="ecnewpassword" required value="" />
                    </div>
                    <div class="checkout__input">
                        <p>Password Confirmation<span>*</span></p>
                        <input type="password" id="ecnewpasswordconfirmation" required value="" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="site-btn" id="ecsubmitbtn" value="Submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection