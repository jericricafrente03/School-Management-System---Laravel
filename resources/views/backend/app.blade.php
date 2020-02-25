<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('backend/img/favicon.png')}}">
  <title>
    @yield('title')
  </title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="{{asset('backend/css/all.css')}}" rel="stylesheet">
  <link href="{{asset('backend/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
  <link href="{{asset('backend/demo/demo.css')}}" rel="stylesheet" />
  @stack('css')
</head>

<body class="">
  <div class="wrapper">
    @include('backend.layouts.sidebar')
      <div class="main-panel">
          @include('backend.layouts.navbar')
          @yield('content')
          @include('backend.layouts.footer')
          @include('backend.layouts.widget')
      </div>

  </div>

  <script src="{{ asset('backend/js/core/jquery.min.js')}}"></script>
  <script src="{{ asset('js/parsley.js')}}"></script>
  <script src="{{ asset('backend/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{ asset('backend/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/js/black-dashboard.min.js?v=1.0.0')}}"></script>
  <script src="{{ asset('backend/demo/demo.js')}}"></script>
  <script src="{{ asset('backend/js/widget.js')}}"></script>
  @stack('js')
</body>

</html>