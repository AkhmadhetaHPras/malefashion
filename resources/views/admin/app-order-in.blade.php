@extends('admin.layouts.app')

@section('content')

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Orders /</span> List
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
              </select></label>
          </div>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-2">
          <div id="DataTables_Table_0_filter" class="dataTables_filter">
            <label>
              <input type="search" class="form-control" placeholder="Search Invoice" aria-controls="DataTables_Table_0">
            </label>
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
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px;" aria-label="Client: activate to sort column ascending">Username
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
                <button type="button" class="btn btn-outline-success me-2">Accept</button>
                <button type="button" class="btn btn-outline-danger">Reject</button>                
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