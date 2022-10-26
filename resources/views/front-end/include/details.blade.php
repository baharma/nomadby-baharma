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
                        <h2>Nusa Dua</h2>
                        <p>
                            Bali
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{asset('nomads-desaint-main/img/gianyar.jpg')}}" alt="" class="xzoom" 
                                id="xzoom-default" xoriginal="img/gianyar.jpg" width="800px">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{asset('nomads-desaint-main/img/kota-denpasar-header.jpg')}}">
                                    <img src="{{asset('nomads-desaint-main/img/kota-denpasar-header.jpg')}}" alt="" class="xzoom-gallery" width="100"
                                    xoriginal="{{asset('nomads-desaint-main/img/kota-denpasar-header.jpg')}}"
                                    >
                                </a>
                                <a href="{{asset('nomads-desaint-main/img/gianyar.jpg')}}">
                                    <img src="{{asset('nomads-desaint-main/img/gianyar.jpg')}}" alt="" class="xzoom-gallery" width="100"
                                    xoriginal="{{asset('img/gianyar.jpg')}}"
                                    >
                                </a>
                                <a href="{{asset('nomads-desaint-main/img/Kuta_Beach.jpg')}}">
                                    <img src="{{asset('nomads-desaint-main/img/Kuta_Beach.jpg')}}" alt="" class="xzoom-gallery" width="100"
                                    xoriginal="{{asset('nomads-desaint-main/img/Kuta_Beach.jpg')}}"
                                    >
                                </a>
                                <a href="{{asset('nomads-desaint-main/img/nusadua.jpg')}}">
                                    <img src="{{asset('nomads-desaint-main/img/nusadua.jpg')}}" alt="" class="xzoom-gallery" width="100"
                                    xoriginal="{{asset('nomads-desaint-main/img/nusadua.jpg')}}"
                                    >
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        i di belakangnya, beach club yang cukup luas dengan kapasitas 700 orang 
                        ini menawarkan berbagai spot kece yang sesuai dengan 
                        budget dan keinginanmu.</p>
                        <p>Dari area hamDiapit oleh Pantai Melasti yang spektakuler di bagian depan serta bukit 
                            kapur yang menjulang tinggmock, sofa, cabana, plantation, sand daybed, lagoon, 
                            serta ruang VVIP indoor yang semuanya menyuguhkan view laut biru. Jadi mau ke sini 
                            sendirian, berdua pasangan, dengan keluarga, atau bahkan bareng temen-temen!</p>
                            <div class="features row">
                                <div class="col-md-4">
                                   <div class="description">
                                    <h3>Event</h3>
                                    <p>Sad</p>
                                   </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="description border-left">
                                     <h3>Language</h3>
                                     <p>Bahasa Indonesia</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="description border-left">
                                     <h3>Foods</h3>
                                     <p>Local Food</p>
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
                                    22 Aug, 2019
                                </th>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <th width="50%" class="text-right">
                                    4D 3N
                                </th>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <th width="50%" class="text-right">
                                    Open Trip
                                </th>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <th width="50%" class="text-right">
                                    $80,00 / person
                                </th>
                            </tr>
                        </table>
                  
                    </div>
                    <div class="join-container d-grid gap-2">
                        <a href="#" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
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