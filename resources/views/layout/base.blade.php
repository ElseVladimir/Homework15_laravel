<!doctype html>
<html lang="en">
@include('partials.head-connects')
<body>
@include('partials.head-menu')
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            @yield('jumbotron')
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>

</main>
@include('partials.footer')
@include('partials.footer-connects')
</body>
</html>
