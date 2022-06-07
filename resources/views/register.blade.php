@extends('layouts.guest')

@section('content')
<div class="container-fluid p-5" style="background-color: #f3f2ee">
    <div class="checkout__form">
        <form action="#">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-12">
                    <h6 class="checkout__title">Biodata</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input type="text" id="rname" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Birth<span>*</span></p>
                                <input type="date" id="rbirth" />
                            </div>
                        </div>
                    </div>
                    <div class="checkout__input">
                        <p>Gender<span>*</span></p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="rmale" value="Male" checked />
                        <label class="form-check-label" for="rmale">
                            Male
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="gender" id="rfemale" value="Female" />
                        <label class="form-check-label" for="rfemale">
                            Female
                        </label>
                    </div>
                    <h6 class="checkout__title mt-3">Credentials</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Telp<span>*</span></p>
                                <input type="text" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="email" />
                            </div>
                        </div>
                    </div>
                    <div class="checkout__input">
                        <p>Username<span>*</span></p>
                        <input type="text" class="checkout__input__add" />
                    </div>
                    <div class="checkout__input">
                        <p>Password<span>*</span></p>
                        <input type="password" />
                    </div>
                    <div class="checkout__input">
                        <p>Password Confirmation<span>*</span></p>
                        <input type="password" />
                    </div>
                    <h6 class="checkout__title mt-5">Address</h6>
                    <div class="checkout__input">
                        <p>Street Address<span>*</span></p>
                        <input type="text" class="checkout__input__add" />
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="checkout__input">
                                <p>Postal Code<span>*</span></p>
                                <input type="text" />
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="checkout__input">
                                <p>City<span>*</span></p>
                                <input type="text" />
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="checkout__input">
                                <p>Province<span>*</span></p>
                                <input type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-6 d-flex justify-content-end">
                            <input type="submit" class="site-btn" value="Sign Up" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection