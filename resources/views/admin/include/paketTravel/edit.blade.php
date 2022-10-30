@extends('admin.layout.app')
@section('page_name','Edit Paket Travel')
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


    <div class="card shadow p-4">
        <div class="card-body">
            <form action="{{ route('travel-package.update',$items->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group my-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$items->title}}">
                </div>
                <div class="form-group my-2">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Location"
                        value="{{$items->location}}">
                </div>
                <div class="form-group my-2">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{$items->about}}</textarea>
                </div>
                <div class="form-group my-2">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="Featured Event"
                        value="{{$items->featured_event}}">
                </div>
                <div class="form-group my-2">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" placeholder="Language"
                        value="{{ $items->language }}">
                </div>
                <div class="form-group my-2">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ $items->foods }}">
                </div>
                <div class="form-group my-2">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control" name="departure_date" placeholder="Departure Date"
                        value="{{ $items->departure_date }}">
                </div>
                <div class="form-group my-2">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="Duration"
                        value="{{ $items->duration }}">
                </div>
                <div class="form-group my-2">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $items->type }}">
                </div>
                <div class="form-group my-2">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price"
                        value="{{ $items->price }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection