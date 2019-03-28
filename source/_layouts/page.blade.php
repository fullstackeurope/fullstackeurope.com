@extends('_layouts.master', ['bodyClass' => 'content-page'])

@section('body')
    <div id="page" class="container mx-auto pt-32 md:pt-theme-36 max-w-md text-grey-darker leading-normal mb-16">
        @yield('content')
    </div>
@endsection
