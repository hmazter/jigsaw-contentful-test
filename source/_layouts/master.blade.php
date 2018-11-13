<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="/assets/spectre.min.css">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
<div class="container grid-lg">
    <header class="navbar mb-2">
        <section class="navbar-section">
            <a href="/" class="navbar-brand mr-2 text-dark">Jigsaw Contentful test</a>
            <a href="https://github.com/hmazter" class="btn btn-link">GitHub</a>
        </section>
    </header>

    <div class="columns">
        <div class="column col-9 col-sm-12">
            @yield('body')
        </div>

        <div class="column col-3 col-sm-12">Sidebar</div>
    </div>
</div>
</body>
</html>
