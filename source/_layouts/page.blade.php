@extends('_layouts.master', ['bodyClass' => 'content-page'])

@section('body')
    <div id="page" class="{{ $maxWidth ?? 'max-w-lg' }} mx-auto px-6 pt-48 text-grey-darker leading-normal mb-16">
        @yield('content')
    </div>
@endsection
