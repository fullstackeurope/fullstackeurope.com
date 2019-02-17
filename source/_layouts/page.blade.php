@extends('_layouts.master', ['bodyClass' => 'content-page'])

@section('body')
    <div class="container mx-auto pt-48 max-w-md">
        @yield('content')
    </div>
@endsection
