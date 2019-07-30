
<!doctype html>
<html lang="en">
@include('includes.head')
<body>

@include('includes.menu')
    <main role="main">
    @yield('content')
    </main>
@include('includes.footer')
@include('includes.jsfooter')
</body>
</html>
