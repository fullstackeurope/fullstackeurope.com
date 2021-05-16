@extends('layouts.base', ['bodyClass' => $bodyClass ?? 'font-noway h-full bg-background'])

@section('body')
    <div class="bg-white">
        @include('2019::layouts.header')

        @yield('content')

        @include('2019::partials.newsletter')
        @include('2019::layouts.footer')
    </div>
@endsection
