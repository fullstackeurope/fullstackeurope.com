@extends('2020.layouts.base', ['bodyClass' => 'font-noway h-full bg-background content-page'])

@section('content')
    <div id="page" class="{{ $maxWidth ?? 'max-w-4xl' }} mx-auto px-6 pt-48 text-gray-600 leading-normal mb-16">
        @yield('page')
    </div>
@endsection
