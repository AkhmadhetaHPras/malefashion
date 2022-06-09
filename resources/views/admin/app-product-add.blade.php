@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products/</span> Add</h3>
<div class="col-xxl">
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h4 class="mb-2">Add Product</h4>
      <small class="text-muted float-end">Mensweaer</small>
    </div>
    <div class="card-body">
      <form>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Product Name</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon11">@</span>
              <input type="text" class="form-control" placeholder="Product name" aria-label="Username" aria-describedby="basic-addon11">
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="form-text">You can use any character up to 100 </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Link Youtube</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="add-user-fullname" placeholder="https://youtu.be/BJJxOiQdSXg" name="userFullname" aria-label="John Doe">
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Description</h6>
          </label>
          <div class="col-sm-10">
            <textarea id="description-product" class="form-control" rows="3" placeholder="Product details"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Short description</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="Short description on show product" aria-label="658 799 8941" aria-describedby="basic-default-phone">
            <div class="form-text">You can use any character up to 255 </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Prices</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group input-group-merge">
              <span class="input-group-text" id="currency">Rp </span>
              <input class="form-control" type="number" value="0" id="html5-number-input">
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Category</h6>
          </label>
          <div class="col-sm-10">
            <select id="gender" class="form-select" required>
              <option value="" data-select2-id="2">Select</option>
              <option value="1">Accessories</option>
              <option value="2">Bags</option>
              <option value="3">Cloths</option>
              <option value="4">Shoes</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Brands</h6>
          </label>
          <div class="col-sm-10">
            <select id="gender" class="form-select " required>
              <option value="" data-select2-id="2">Select</option>
              <option value="1">Adidas Neo</option>
              <option value="2">Adidas Original</option>
              <option value="3">Stella Mccartney</option>
              <option value="4">Athletics</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Tags</h6>
          </label>
          <div class="col-sm-10">
            <div class="row">
              <div class=" col-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Man" id="Man">
                  <label class="form-check-label" for="Man"> Man </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Unisex" id="Unisex">
                  <label class="form-check-label" for="Unisex"> Unisex </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Golf" id="Golf">
                  <label class="form-check-label" for="Golf"> Golf </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Lifestyle" id="Lifestyle">
                  <label class="form-check-label" for="Lifestyle"> Lifestyle </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Football" id="Football">
                  <label class="form-check-label" for="Football"> Football </label>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Original" id="Original">
                  <label class="form-check-label" for="Original"> Original </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Original" id="Training">
                  <label class="form-check-label" for="Training"> Training </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Skateboarding" id="Skateboarding">
                  <label class="form-check-label" for="Skateboarding"> Skateboarding </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Basketball" id="Basketball">
                  <label class="form-check-label" for="Basketball"> Basketball </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Others" id="Others">
                  <label class="form-check-label" for="Others"> Others </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Slugs</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="pink-mini-bag" aria-label="658 799 8941" aria-describedby="basic-default-phone">
            <div class="form-text">you can use the character "-" for spaces </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Thumbnail image</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="Thumbnail">
              <label class="input-group-text" for="Thumbnail">Upload</label>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 1</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display1">
              <label class="input-group-text" for="display1">Upload</label>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 2</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display2">
              <label class="input-group-text" for="display2">Upload</label>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 3</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display3">
              <label class="input-group-text" for="display3">Upload</label>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 4</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display4">
              <label class="input-group-text" for="display4">Upload</label>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 5</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display5">
              <label class="input-group-text" for="display5">Upload</label>
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