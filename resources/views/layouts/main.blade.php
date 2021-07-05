<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    {{-- Main css file --}}
    @include('layouts.partials.main_css')
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      {{-- Sidebar  --}}
      @include('layouts.partials.sidebar')
      <div class="container-fluid page-body-wrapper">
        {{-- Topbar  --}}
        @include('layouts.partials.topbar')
        {{-- Footer --}}
        @include('layouts.partials.footer')
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    {{-- main js  --}}
    @include('layouts.partials.main_js')
  </body>
</html>