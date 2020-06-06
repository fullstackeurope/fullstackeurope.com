@extends('layouts.base', ['bodyClass' => $bodyClass ?? 'font-noway h-full bg-background'])

@section('body')
    <div class="bg-white">
        @include('2021.layouts.header')

        @yield('content')

        @include('2021.partials.newsletter')
        @include('2021.layouts.footer')
    </div>
@endsection
