@extends('layouts.base', ['bodyClass' => $bodyClass ?? 'font-noway h-full bg-background'])

@section('body')
    <div class="bg-white">
        @include('2020.layouts.header')

        @yield('content')

        @include('2020.partials.newsletter')
        @include('2020.layouts.footer')
    </div>
@endsection
