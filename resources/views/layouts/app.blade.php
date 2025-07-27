<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    @include('layouts.partials.header')

    @include('layouts.partials.sidebar')

    <div class="content-wrapper">
      @isset($header)
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              {{ $header }}
            </div>
          </div>
        </div>
      </section>
      @endisset

      <section class="content">
        @yield('content')
      </section>
    </div>

    @include('layouts.partials.footer')

  </div>

  <!-- AdminLTE JS -->
  <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
