@extends('admin.layouts.app')

@section('content')

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Invoice /</span> List
</h4>

<!-- Invoice List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <div class="row ms-2 me-3">
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-2">
          <div class="dataTables_length" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select></label></div>
          <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
            <div class="dt-buttons">
              <button class="dt-button btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="location.href='/orders/add'">
                <span>
                  <i class="bx bx-plus me-md-2"></i>
                  <span class="d-md-inline-block d-none">Create Invoice</span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-2">
          <div id="DataTables_Table_0_filter" class="dataTables_filter">
            <label>
              <input type="search" class="form-control" placeholder="Search Invoice" aria-controls="DataTables_Table_0">
            </label>
          </div>
          <div class="invoice_status mb-3 mb-md-0">
            <select id="UserRole" class="form-select">
              <option value=""> Select Status </option>
              <option value="Downloaded" class="text-capitalize">Downloaded</option>
              <option value="Draft" class="text-capitalize">Draft</option>
              <option value="Paid" class="text-capitalize">Paid</option>
              <option value="Partial Payment" class="text-capitalize">Partial Payment</option>
              <option value="Past Due" class="text-capitalize">Past Due</option>
              <option value="Sent" class="text-capitalize">Sent</option>
            </select>
          </div>
        </div>
      </div>
      <table class="invoice-list-table table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
        <thead>
          <tr role="row">
            <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=": activate to sort column ascending">
            </th>
            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 55px;" aria-label="#ID: activate to sort column ascending" aria-sort="descending">#ID
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 36px;" aria-label=": activate to sort column ascending"><i class="bx bx-trending-up"></i>
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 250px;" aria-label="Client: activate to sort column ascending">Username
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 64px;" aria-label="Total: activate to sort column ascending">Total
            </th>
            <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="Issued Date: activate to sort column ascending">Issued Date
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;" aria-label="Balance">Status</th>
            <th class="cell-fit sorting_disabled" rowspan="1" colspan="1" style="width: 78px;" aria-label="Actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="odd">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
            <td>
              <span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>" aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30">
                  <i class="bx bx-paper-plane bx-xs"></i>
                </span>
              </span>
            </td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <span class="avatar-initial rounded-circle bg-label-primary">JK</span>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Jamal Kerrod</a>
                  <small class="text-truncate text-muted">Software Development</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">3077</span>$3077</td>
            <td><span class="d-none">20200509</span>09 May 2020</td>
            <td><span class="badge bg-label-success"> Paid </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="{{ route('orders-view') }}" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="{{ route('orders-edit') }}" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="even">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#5041</a></td>
            <td>
              <span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 11/19/2020</span>" aria-label="<span>Sent<br> Balance: 0<br> Due Date: 11/19/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30">
                  <i class="bx bx-paper-plane bx-xs"></i>
                </span>
              </span>
            </td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2"><img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Shamus Tuttle</a>
                  <small class="text-truncate text-muted">Software Development</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">2230</span>$2230</td>
            <td><span class="d-none">20201119</span>19 Nov 2020</td>
            <td><span class="badge bg-label-warning"> On Process </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="odd">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#5027</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Partial Payment<br> Balance: 0<br> Due Date: 09/25/2020</span>" aria-label="<span>Partial Payment<br> Balance: 0<br> Due Date: 09/25/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <img src="../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Devonne Wallbridge</a>
                  <small class="text-truncate text-muted">Software Development</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">2787</span>$2787</td>
            <td><span class="d-none">20200925</span>25 Sep 2020</td>
            <td><span class="badge bg-label-success"> Paid </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="even">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#5024</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Partial Payment<br> Balance: -$202<br> Due Date: 08/02/2020</span>" aria-label="<span>Partial Payment<br> Balance: -$202<br> Due Date: 08/02/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Ariella Filippyev</a>
                  <small class="text-truncate text-muted">Unlimited Extended License</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">5285</span>$5285</td>
            <td><span class="d-none">20200802</span>02 Aug 2020</td>
            <td><span class="d-none">-$202</span>-$202</td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="odd">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#5020</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Downloaded<br> Balance: 0<br> Due Date: 12/15/2020</span>" aria-label="<span>Downloaded<br> Balance: 0<br> Due Date: 12/15/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30">
                  <i class="bx bx-down-arrow-circle bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <img src="../assets/img/avatars/11.png" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Roy Southerell</a>
                  <small class="text-truncate text-muted">UI/UX Design &amp; Development</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">5219</span>$5219</td>
            <td><span class="d-none">20201215</span>15 Dec 2020</td>
            <td><span class="badge bg-label-success"> Paid </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="even">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#4995</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Partial Payment<br> Balance: 0<br> Due Date: 06/09/2020</span>" aria-label="<span>Partial Payment<br> Balance: 0<br> Due Date: 06/09/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <img src="../assets/img/avatars/11.png" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column"><a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Raynell Clendennen</a>
                  <small class="text-truncate text-muted">Template Customization</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">3313</span>$3313</td>
            <td><span class="d-none">20200609</span>09 Jun 2020</td>
            <td><span class="badge bg-label-success"> Paid </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="odd">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#4993</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Partial Payment<br> Balance: 0<br> Due Date: 10/22/2020</span>" aria-label="<span>Partial Payment<br> Balance: 0<br> Due Date: 10/22/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <span class="avatar-initial rounded-circle bg-label-primary">LA</span>
                  </div>
                </div>
                <div class="d-flex flex-column"><a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Lutero Aloshechkin</a>
                  <small class="text-truncate text-muted">Unlimited Extended License</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">4836</span>$4836</td>
            <td><span class="d-none">20201022</span>22 Oct 2020</td>
            <td><span class="badge bg-label-success"> Paid </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="even">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#4989</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Past Due<br> Balance: 0<br> Due Date: 08/01/2020</span>" aria-label="<span>Past Due<br> Balance: 0<br> Due Date: 08/01/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-danger w-px-30 h-px-30">
                  <i class="bx bx-info-circle bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <span class="avatar-initial rounded-circle bg-label-primary">OG</span>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Orson Grafton</a>
                  <small class="text-truncate text-muted">Unlimited Extended License</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">5293</span>$5293</td>
            <td><span class="d-none">20200801</span>01 Aug 2020</td>
            <td><span class="badge bg-label-success"> Paid </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="odd">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#4989</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Downloaded<br> Balance: 0<br> Due Date: 09/23/2020</span>" aria-label="<span>Downloaded<br> Balance: 0<br> Due Date: 09/23/2020</span>">
                <span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30">
                  <i class="bx bx-down-arrow-circle bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <span class="avatar-initial rounded-circle bg-label-success">LH</span>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Lorine Hischke</a>
                  <small class="text-truncate text-muted">Unlimited Extended License</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">3623</span>$3623</td>
            <td><span class="d-none">20200923</span>23 Sep 2020</td>
            <td><span class="badge bg-label-success"> Paid </span></td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="even">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="app-invoice-preview.html">#4965</a></td>
            <td><span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>Partial Payment<br> Balance: $666<br> Due Date: 03/18/2021</span>" aria-label="<span>Partial Payment<br> Balance: $666<br> Due Date: 03/18/2021</span>">
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
              </span></td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2">
                    <img src="../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="pages-profile-user.html" class="text-body text-truncate fw-semibold">Yelena O'Hear</a>
                  <small class="text-truncate text-muted">Unlimited Extended License</small>
                </div>
              </div>
            </td>
            <td><span class="d-none">3789</span>$3789</td>
            <td><span class="d-none">20210318</span>18 Mar 2021</td>
            <td><span class="d-none">$666</span>$666</td>
            <td>
              <div class="d-flex align-items-center">
                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i class="bx bx-send mx-1"></i>
                </a>
                <a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="app-invoice-edit.html" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Download</a>
                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row mx-2">
        <div class="col-sm-12 col-md-6">
          <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"> Showing 1 to 10 of 50 entries
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <ul class="pagination">
              <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
              </li>
              <li class="paginate_button page-item active">
                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a>
              </li>
              <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection