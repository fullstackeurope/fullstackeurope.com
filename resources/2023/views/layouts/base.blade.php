@extends('layouts.base', ['bodyClass' => $bodyClass ?? 'font-noway h-full bg-background'])

@section('body')
    <div class="bg-white">
        @include('2023::layouts.header')

        @yield('content')

        @include('2023::partials.newsletter')
        @include('2023::layouts.footer')
    </div>
@endsection
