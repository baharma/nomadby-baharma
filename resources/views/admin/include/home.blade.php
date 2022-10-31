@extends('admin.layout.app')
@section('content')

<div class="row">
    <div class="col-sm-3">
      <div class="card border border-info border-start-0 rounded-end">
        <div class="card-body">
          <h5 class="card-title">Paket Travel </h5>
          <p class="card-text">Jumlah Paket Travel </p>
          <h1 class="btn btn-primary">{{$travel_package}}</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card border border-info border-start-0 rounded-end">
        <div class="card-body ">
          <h5 class="card-title">Transaction</h5>
          <p class="card-text">Jumlah Transaction Travel</p>
          <h1 class="btn btn-primary">{{$transaction}}</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
        <div class="card border border-info border-start-0 rounded-end">
          <div class="card-body">
            <h5 class="card-title">Pending</h5>
            <p class="card-text">Jumlah Pending</p>
            <h1 class="btn btn-primary">{{$transaction_pending}}</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card border border-info border-start-0 rounded-end">
          <div class="card-body">
            <h5 class="card-title">Success</h5>
            <p class="card-text">Jumlah Success</p>
            <h1 class="btn btn-primary">{{$transaction_success}}</h1>
          </div>
        </div>
      </div>
  </div>
@endsection