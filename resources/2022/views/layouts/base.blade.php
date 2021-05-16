@extends('layouts.base', ['bodyClass' => $bodyClass ?? 'font-noway h-full bg-background'])

@section('body')
    <div class="bg-white">
        @include('2022::layouts.header')

        @yield('content')

        @include('2022::partials.newsletter')
        @include('2022::layouts.footer')
    </div>
@endsection
