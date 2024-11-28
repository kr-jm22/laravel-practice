@props([
     'title'
])

<head>
    @stack('head_start')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    {{--  TODO ::  time 사용하게 되었을 때, 캐싱되지 않아 퍼포먼스 저하 --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('css/common.css?v=' . time()) }}" />

    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js?v=' . time()) }}"></script>

    @stack('head_end')
</head>
