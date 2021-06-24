@extends('layouts.base')

@section('body')
    <div id="artwork" class="mx-auto p-12 leading-relaxed flex flex-col" style="width: 1200px; height: 630px; background: url({{ asset('assets/2021/images/pattern.png') }}) repeat">
        <div class="flex justify-between mb-12">
            <img class="w-1/3" src="{{ asset('assets/2021/images/logo-black.svg') }}" alt="">
            <img class="rounded-full w-32 h-32 bg-white" src="{{ $avatar }}" alt="">
        </div>
        <div>
            <h1 class="text-5xl font-bold mb-3">{{ $speaker_name }}: {{ $title }}</h1>
            <h2 class="text-4xl mb-4">{{ $subtitle }}</h2>
            <p class="text-xl">{{ $snippet }}</p>
        </div>
    </div>
@endsection
