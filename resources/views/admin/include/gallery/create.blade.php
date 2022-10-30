@extends('admin.layout.app')
@section('page_name','Tambah Gallery')
@section('content')

<div class="countainer-fluid">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card shadow p-3">
    <div class="card-body">
        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-2">
                <label for="title">Paket Travel</label>
                <select name="travel_packages_id" required class="form-control">
                    <option value="">Pilih Paket Travel</option>
                    @foreach($travel_packages as $travel_package)
                        <option value="{{ $travel_package->id }}">
                            {{ $travel_package->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group my-2">
                <label for="image">Image</label>
                <input type="file" class="form-control dropify" name="image" placeholder="Image" >
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Simpan
            </button>
        </form>
    </div>
</div>
</div>

@endsection
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
      
 <script>
      $('.dropify').dropify();
    </script>   
@endpush