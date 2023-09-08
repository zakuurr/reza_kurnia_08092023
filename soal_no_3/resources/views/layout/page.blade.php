<!DOCTYPE html>
<html lang="en">
    @include('layout.partials.head')
<body>

    @include('layout.components.navbar')
    <div class="container">
        @yield('content')
    </div>


   @include('layout.partials.js')

</body>
</html>
