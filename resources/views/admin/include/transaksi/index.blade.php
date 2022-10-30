@extends('admin.layout.app')
@section('page_name','Transaksi')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  </div>
<div class="card shadow">
    <div class="card-body">
        
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Travel</th>
            <th>User</th>
            <th>Visa</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

        <?php $i=1 ?>
        @forelse($items as $item)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->travel_package->title }}</td>
            <td>{{ $item->user->name }}</td>
            <td>${{ $item->additional_visa }}</td>
            <td>${{ $item->transaction_total }}</td>
            <td>{{ $item->transaction_status }}</td>
            <td>
                <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                <form action="{{ route('transaction.destroy', $item->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>

            </td>
        </tr>
    @empty
        <td colspan="7" class="text-center">
            Data Kosong
        </td>
    @endforelse
    </tbody>
  </table>
  {{ $items->links() }}
    </div>
</div>

</div>
@endsection