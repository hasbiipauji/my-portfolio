<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title', 'Page')</title>
    @include('admin.partials.link')
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    @include('admin.partials.header')

      <!-- cards -->
      @yield('content')
      <!-- end cards -->
      @include('admin.partials.footer')


  </body>
  @include('admin.partials.script')


<script>
// untuk alert
document.getElementById("close-success-alert").onclick = function() {
  this.parentElement.style.display = "none";
};
</script>
<script>
  // tombol untuk hapus
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("confirm-delete").addEventListener("click", function() {
     document.getElementById("popup-delete").submit(); // Submit form
    });
});
</script>


</html>
