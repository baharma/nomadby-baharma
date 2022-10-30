<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


@include('admin.layout.stlye')

</head>

<body>
  @if($errors->any())
  @foreach ($errors->all() as $error)
  <span class="error" data-message="{{$error}}"></span>
  @endforeach
  @endif
  @if (session('message'))
  <span class="success" data-message="{{session('message')}}"></span>
  @endif


    @include('admin.layout.navbar')


    @include('admin.layout.sidebar')
  <main id="main" class="main">
    <div class="countainer-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">@yield('page_name')</h1>
    </div>
    </div>
    @yield('content')


  </main><!-- End #main -->

  @include('admin.layout.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('admin.layout.script')

  @stack('script')
</body>
<script>
  $('.dropify').dropify();
  $(function(){
    $('.success').show(function () {
                let message = $(this).data('message')
                Swal.fire(
                    'Success',
                    message,
                    'success'
                )
            });

            
            $('.error').show(function () {
                let message = $(this).data('message')
                Swal.fire(
                    'Warning',
                    message,
                    'error'
                )
            });
  });
  

</script>
</html>

