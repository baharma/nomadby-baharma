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

    @include('admin.layout.navbar')


    @include('admin.layout.sidebar')
  <main id="main" class="main">

    @yield('content')


  </main><!-- End #main -->

  @include('admin.layout.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('admin.layout.script')

  @stack('script')
</body>

</html>