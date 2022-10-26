@extends('front-end.layout.paymentapp')
@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{asset('nomads-desaint-main/img/mailbox.png')}}" alt="">
            <h1>Yay! Success</h1>
            <p>
                we've sent you email for trip instrution
                <br>
                please read it as well
            </p>
            <a href="index.html" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.xzoom,.xzoom-gallery').xzoom({
            zoomWidth: 500,

            title: false,
            tint: '#333',
            Xoffset: 15
        });

        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd',
            icons: {
                rightIcon: '<img src="nomads-desaint-main/img/calendar-icon-black_318-9776.jpg" style="width:30px; margin-bottom:22px; height:40px;"/>'
            }
        })
    });
</script>
@endpush