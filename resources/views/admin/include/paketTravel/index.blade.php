@extends('admin.layout.app')
@section('page_name','Paket Travel')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">

      <a href="{{ route('travel-package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
      </a>
  </div>
<div class="card shadow">
    <div class="card-body">
        
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Location</th>
            <th>Type</th>
            <th>Departure Date</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

        <?php $i=1 ?>
        @forelse ($item as $items)
      <tr>
    
        <th scope="row">{{$i++}}</th>
        <td>{{ $items->title }}</td>
        <td>{{ $items->location }}</td>
        <td>{{ $items->type }}</td>
        <td>{{ $items->departure_date }}</td>
        <td>{{ $items->type }}</td>
        <td>
            <a href="{{ route('travel-package.edit', $items->id) }}" class="btn btn-info">
                <i class="fa fa-pencil-alt"></i>
            </a>

            <form action="{{ route('travel-package.destroy', $items->id) }}" method="post" class="d-inline">
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
  {{ $item->links() }}
    </div>
</div>

</div>
@endsection