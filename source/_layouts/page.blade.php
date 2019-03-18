@extends('_layouts.master', ['bodyClass' => 'content-page'])

@section('body')
    <div id="page" class="container mx-auto pt-48 max-w-md text-grey-darker leading-normal">
        @yield('content')
    </div>
@endsection
