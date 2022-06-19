@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<form action="">
  <div class="row invoice-edit">
    <!-- Invoice Edit-->
    <div class="col-lg-9 col-12 mb-lg-0 mb-4">
      <div class="card invoice-preview-card">
        <div class="card-body">
          <div class="row p-sm-3 p-0">
            <div class="col-md-6 mb-md-0 mb-4">
              <div class="d-flex svg-illustration mb-4 gap-2">
                <span class="app-brand-logo demo mb-3">
                  <img src="{{ asset('img/logo-light.webp') }}" alt="logo">
                </span>
                <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
              </div>
              <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
              <p class="mb-1">San Diego County, CA 91905, USA</p>
              <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
            </div>
            <div class="col-md-6">
              <dl class="row mb-2">
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                  <span class="h4 text-capitalize mb-0 text-nowrap">Invoice #</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-md-end">
                  <div class="w-px-150">
                    <input type="text" class="form-control" disabled="" placeholder="3492" value="3492" id="invoiceId">
                  </div>
                </dd>
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                  <span class="fw-normal">Date:</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-md-end">
                  <div class="w-px-150">
                    <input type="text" class="form-control invoice-date flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
                  </div>
                </dd>
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                  <span class="fw-normal">Due Date:</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-md-end">
                  <div class="w-px-150">
                    <input type="text" class="form-control due-date flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
                  </div>
                </dd>
              </dl>
            </div>
          </div>

          <hr class="my-4 mx-n4">

          <div class="row p-sm-3 p-0">
            <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-4">
              <h6 class="pb-2">Invoice To:</h6>
              <p class="mb-1">Rosi Latansa Salsabela</p>
              <p class="mb-1">20 Mawar Street</p>
              <p class="mb-1">Kediri, East Java</p>
              <p class="mb-1">718-986-6062</p>
              <p class="mb-0">peakyFBlinders@gmail.com</p>
            </div>
            <div class="col-md-6 col-sm-7">
              <h6 class="pb-2">Bill To:</h6>
              <table>
                <tbody>
                  <tr>
                    <td class="pe-3">Total Due:</td>
                    <td>Rp 2.100.000</td>
                  </tr>
                  <tr>
                    <td class="pe-3">Bank name:</td>
                    <td>Indonesian Bank</td>
                  </tr>
                  <tr>
                    <td class="pe-3">Country:</td>
                    <td>Indonesia</td>
                  </tr>
                  <tr>
                    <td class="pe-3">Account Number:</td>
                    <td>0111-01-058009-50-7</td>
                  </tr>
                  <tr>
                    <td class="pe-3">SWIFT code:</td>
                    <td>INDOIDJA</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <hr class="mx-n4">

          <div class="source-item py-sm-3">
            <div class="mb-3" data-repeater-list="group-a">
              <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="">
                <div class="d-flex border rounded position-relative pe-0">
                  <div class="row w-100 m-0 p-3">
                    <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                      <p class="mb-2 repeater-title">Item</p>
                      <select class="form-select item-details mb-2">
                        <option value="App Design">App Design</option>
                        <option value="App Customization" selected="">App Customization</option>
                        <option value="ABC Template">ABC Template</option>
                        <option value="App Development">App Development</option>
                      </select>
                      <select class="form-select item-details mb-2">
                        <option selected="" disabled="">Select Size</option>
                        <option value="App Design">App Design</option>
                        <option value="App Customization">App Customization</option>
                        <option value="ABC Template">ABC Template</option>
                        <option value="App Development">App Development</option>
                      </select>
                      <textarea class="form-control" rows="2">The most developer friendly &amp; highly customizable HTML5 Admin</textarea>
                    </div>
                    <div class="col-md-3 col-12 mb-md-0 mb-3">
                      <p class="mb-2 repeater-title">Cost</p>
                      <input type="number" class="form-control invoice-item-price mb-2" value="24" placeholder="24" min="12">
                    </div>
                    <div class="col-md-2 col-12 mb-md-0 mb-3">
                      <p class="mb-2 repeater-title">Qty</p>
                      <input type="number" class="form-control invoice-item-qty" value="1" placeholder="1" min="1" max="50">
                    </div>
                    <div class="col-md-1 col-12 pe-0">
                      <p class="mb-2 repeater-title">Price</p>
                      <p class="mb-0">$24.00</p>
                    </div>
                  </div>
                  <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                    <i class="bx bx-x fs-4 text-muted cursor-pointer" data-repeater-delete=""></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="button" class="btn btn-primary" data-repeater-create="">Add Item</button>
              </div>
            </div>
          </div>

          <hr class="my-4 mx-n4">

          <div class="row py-sm-3">
            <div class="col-md-6 mb-md-0 mb-3">
              <div class="d-flex align-items-center mb-3">
                <label for="salesperson" class="form-label me-5 fw-semibold">Salesperson:</label>
                <input type="text" class="form-control" id="salesperson" placeholder="Edward Crowley" value="Edward Crowley">
              </div>
              <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" value="Thanks for your business">
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <div class="invoice-calculations">
                <div class="d-flex justify-content-between mb-2">
                  <span class="w-px-100">Subtotal:</span>
                  <span class="fw-semibold">$5000.25</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span class="w-px-100">Discount:</span>
                  <span class="fw-semibold">$00.00</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span class="w-px-100">Tax:</span>
                  <span class="fw-semibold">$100.00</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <span class="w-px-100">Total:</span>
                  <span class="fw-semibold">$5100.25</span>
                </div>
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="note" class="form-label fw-semibold">Note:</label>
                <textarea class="form-control" rows="2" id="note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Invoice Edit-->

    <!-- Invoice Actions -->
    <div class="col-lg-3 col-12 invoice-actions">
      <div class="card mb-4">
        <div class="card-body">
          <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
            <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-paper-plane bx-xs me-3"></i>Send Invoice</span>
          </button>
          <div class="d-flex my-3">
            <a href="./app-invoice-preview.html" class="btn btn-label-secondary w-100 me-3">Preview</a>
            <button type="button" class="btn btn-label-secondary w-100">Save</button>
          </div>
          <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
            <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-dollar bx-xs me-3"></i>Add Payment</span>
          </button>
        </div>
      </div>
      <div>
        <p class="mb-2">Accept payments via</p>
        <div class="badge bg-label-success">
          <p class="lead mb-0"><strong>COD</strong></p>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <label for="payment-terms" class="mb-0">Payment Terms</label>
          <label class="switch switch-primary me-0">
            <input type="checkbox" class="switch-input" id="payment-terms" checked="">
            <span class="switch-toggle-slider">
              <span class="switch-on">
                <i class="bx bx-check"></i>
              </span>
              <span class="switch-off">
                <i class="bx bx-x"></i>
              </span>
            </span>
            <span class="switch-label"></span>
          </label>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <label for="client-notes" class="mb-0">Client Notes</label>
          <label class="switch switch-primary me-0">
            <input type="checkbox" class="switch-input" id="client-notes">
            <span class="switch-toggle-slider">
              <span class="switch-on">
                <i class="bx bx-check"></i>
              </span>
              <span class="switch-off">
                <i class="bx bx-x"></i>
              </span>
            </span>
            <span class="switch-label"></span>
          </label>
        </div>
        <div class="d-flex justify-content-between">
          <label for="payment-stub" class="mb-0">Payment Stub</label>
          <label class="switch switch-primary me-0">
            <input type="checkbox" class="switch-input" id="payment-stub">
            <span class="switch-toggle-slider">
              <span class="switch-on">
                <i class="bx bx-check"></i>
              </span>
              <span class="switch-off">
                <i class="bx bx-x"></i>
              </span>
            </span>
            <span class="switch-label"></span>
          </label>
        </div>
      </div>
    </div>
    <!-- /Invoice Actions -->
  </div>
</form>


<!-- Offcanvas -->
<!-- Send Invoice Sidebar -->
<div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
  <div class="offcanvas-header mb-3">
    <h5 class="offcanvas-title">Send Invoice</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form>
      <div class="mb-3">
        <label for="invoice-from" class="form-label">From</label>
        <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com">
      </div>
      <div class="mb-3">
        <label for="invoice-to" class="form-label">To</label>
        <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com">
      </div>
      <div class="mb-3">
        <label for="invoice-subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
      </div>
      <div class="mb-3">
        <label for="invoice-message" class="form-label">Message</label>
        <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
                      Thank you for your business, always a pleasure to work with you!
                      We have generated a new invoice in the amount of $95.59
                      We would appreciate payment of this invoice by 05/11/2021</textarea>
      </div>
      <div class="mb-4">
        <span class="badge bg-label-primary">
          <i class="bx bx-link bx-xs"></i>
          <span class="align-middle">Invoice Attached</span>
        </span>
      </div>
      <div class="mb-3 d-flex flex-wrap">
        <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>
  </div>
</div>
<!-- /Send Invoice Sidebar -->

<!-- Add Payment Sidebar -->
<div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
  <div class="offcanvas-header mb-3">
    <h5 class="offcanvas-title">Add Payment</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
      <p class="mb-0">Invoice Balance:</p>
      <p class="fw-bold mb-0">$5000.00</p>
    </div>
    <form>
      <div class="mb-3">
        <label class="form-label" for="invoiceAmount">Payment Amount</label>
        <div class="input-group">
          <span class="input-group-text">$</span>
          <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount" placeholder="100">
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="payment-date">Payment Date</label>
        <input id="payment-date" class="form-control invoice-date flatpickr-input" type="text" readonly="readonly">
      </div>
      <div class="mb-3">
        <label class="form-label" for="payment-method">Payment Method</label>
        <select class="form-select" id="payment-method">
          <option value="" selected="" disabled="">Select payment method</option>
          <option value="Cash">Cash</option>
          <option value="Bank Transfer">Bank Transfer</option>
          <option value="Debit Card">Debit Card</option>
          <option value="Credit Card">Credit Card</option>
          <option value="Paypal">Paypal</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="form-label" for="payment-note">Internal Payment Note</label>
        <textarea class="form-control" id="payment-note" rows="2"></textarea>
      </div>
      <div class="mb-3 d-flex flex-wrap">
        <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>
  </div>
</div>
<!-- /Add Payment Sidebar -->
<!-- /Offcanvas -->

@endsection

<!-- /Content Section -->