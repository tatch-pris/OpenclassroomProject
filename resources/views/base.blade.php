<!DOCTYPE html>
{{-- ce cela veut dire tout simplement en --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', 'A')</title>
        {{-- le A c'est la valeur par défaut --}}

    </head>
    <body>
        {{-- nous entrain de mettre sur peid un template le content se trouve dans la page about --}}
        @yield('content')
    <footer>
        <p>
            &copy: Copyright {{date('Y')}} 
            &middot; <a href="/about-us">About Us</a>
        </p>
    </footer>
    </body>
</html>
