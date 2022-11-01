@extends('front-end.layout.app')
@section('content')


<main>
    <section class="section-details-header"></section>
    <section class="section-details-content ">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details" style="padding: 30px ;border-radius: 11px;">
                        <h2>{{$item->title}}</h2>
                        <p>
                            {{$item->location}}
                        </p>
                        @if($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{url('public/Image/'.$item->galleries->first()->image)}}" alt="" class="xzoom" 
                                id="xzoom-default" xoriginal="{{url('public/Image/'.$item->galleries->first()->image)}}" width="800px">
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $items)
                                <a href="{{url('public/Image/'.$item->galleries->first()->image)}}">
                                    <img src="{{url('public/Image/'.$item->galleries->first()->image)}}" alt="" class="xzoom-gallery" width="100"
                                    xoriginal="{{url('public/Image/'.$item->galleries->first()->image)}}"
                                    >
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <h2>Tentang Wisata</h2>
                     <p>
                        {!! $item->about !!}
                     </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>{{ $item->featured_event }}</p>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $item->language }}</p>
                                      </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $item->foods }}</p>
                                      </div>
                                 </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-detail card-right" style="padding: 20px;">
                        <h2>Member Are going</h2>
                        <div class="members my-2">
    
                        </div>
                        <hr>
                        <h2>Trip informasi</h2>
                        <table>
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <th width="50%" class="text-right">
                                    {{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y') }}
                                </th>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <th width="50%" class="text-right">
                                    {{ $item->duration }}
                                </th>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <th width="50%" class="text-right">
                                    {{ $item->type }}
                                </th>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <th width="50%" class="text-right">
                                    ${{ $item->price }} / person
                                </th>
                            </tr>
                        </table>
                  
                    </div>
                    <div class="join-container d-grid gap-2 ">
                        @auth
                        <form action="{{ route('checkout-process', $item->id) }}" method="post">
                            @csrf
                            <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                Join Now
                            </button>
                        </form>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Login or Register to Join
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    </main>
@endsection
@push('script')
  <script src="{{asset('nomads-desaint-main/script/xzoom/xzoom.min.js')}}"></script>
  <script>
    $(document).ready(function(){
        $('.xzoom,.xzoom-gallery').xzoom({
            zoomWidth:500,

            title:false,
            tint:'#333',
            Xoffset:15
        });
    });
  </script>
@endpush