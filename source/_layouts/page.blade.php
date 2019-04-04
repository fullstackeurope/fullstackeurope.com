@extends('_layouts.master', ['bodyClass' => 'content-page'])

@section('body')
    <div id="page" class="container mx-auto pt-6 md:pt-12 {{ $maxWidth ?? 'max-w-md' }} text-grey-darker leading-normal mb-16">
        @yield('content')
    </div>
@endsection
