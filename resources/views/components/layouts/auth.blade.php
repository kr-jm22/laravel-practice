
<!DOCTYPE html>

<html dir="auto" lang="{{ app()->getLocale() }}">

    <x-layouts.auth.head>
        <x-slot name="title">
            신차연구소, 카랩
        </x-slot>
    </x-layouts.auth.head>

    <body class="welcome_container">
        <x-layouts.auth.content>
            {!! $content !!}
        </x-layouts.auth.content>

    </body>


    <script>
        @stack('jquery')
    </script>
</html>
