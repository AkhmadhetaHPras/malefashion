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
              <option value="Completed" class="text-capitalize">Completed</option>
              <option value="Paid" class="text-capitalize">Paid</option>
              <option value="Processed" class="text-capitalize">Processed</option>
              <option value="Sent" class="text-capitalize">Sent</option>
              <option value="Waiting Confirmation" class="text-capitalize">Waiting Confirmation</option>
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
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px;" aria-label="Client: activate to sort column ascending">Username
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 125px;" aria-label="Total: activate to sort column ascending">Total
            </th>
            <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 145px;" aria-label="Issued Date: activate to sort column ascending">Order Date
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;" aria-label="Balance">Status</th>
            <th class="cell-fit sorting_disabled" rowspan="1" colspan="1" style="width: 78px;" aria-label="Actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $o)
          <tr class="odd">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="{{ route('orders-view') }}">#{{$o->id}}</a></td>
            <td>
              <span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>{{$o->status}}<br> Balance: Rp.{{$o->total}}<br> Due Date: {{$o->order_date}}</span>" aria-label="<span>{{$o->status}}<br> Balance: Rp.{{$o->total}}<br> Due Date: {{$o->order_date}}</span>">
                @if($o->status == 'Completed')
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
                @elseif($o->status == 'Paid')
                <span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
                @elseif($o->status == 'Processed')
                <span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30">
                  <i class="bx bx-down-arrow-circle bx-xs"></i>
                </span>
                @elseif($o->status == 'Sent')
                <span class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30">
                  <i class="bx bx-paper-plane bx-xs"></i>
                </span>
                @elseif($o->status == 'Waiting Confirmation')
                <span class="badge badge-center rounded-pill bg-label-danger w-px-30 h-px-30">
                  <i class="bx bx-info-circle bx-xs"></i>
                </span>
                @endif
              </span>
            </td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2"><img src="{{asset('storage/'.$o->address->user->photo)}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="{{route('users-view')}}" class="text-body text-truncate fw-semibold">{{$o->address->user->name}}</a>
                </div>
              </div>
            </td>
            <td><span class="d-none">{{$o->total}}</span>Rp {{$o->total}}</td>
            <td><span class="d-none">{{$o->order_date}}</span>{{$o->order_date}}</td>
            <td>
              @if($o->status == 'Completed')
              <span class="badge bg-label-success"> {{$o->status}} </span>
              @elseif($o->status == 'Paid')
              <span class="badge bg-label-warning"> {{$o->status}} </span>
              @elseif($o->status == 'Processed')
              <span class="badge bg-label-info"> {{$o->status}} </span>
              @elseif($o->status == 'Sent')
              <span class="badge bg-label-secondary"> {{$o->status}} </span>
              @elseif($o->status == 'Waiting Confirmation')
              <span class="badge bg-label-danger"> {{$o->status}} </span>
              @endif
            </td>
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
          @endforeach
        </tbody>
      </table>
      <div class="row mx-2">
        {{$orders->links()}}
      </div>
    </div>
  </div>
</div>

@endsection