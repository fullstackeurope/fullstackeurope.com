<a href="{{ $link ?? 'mailto:hello@fullstackeurope.com?subject=We want to sponsor!' }}" class="text-grey-darker">
    <div class="bg-theme-grey-light max-w-full h-32 {{ isset($large) ? '' : 'md:h-24'}} enlarge rounded text-2xl font-noway-medium text-center flex flex-col justify-center" style="background-image:url(/assets/images/sponsors/{{ $image }}.png);background-position: center;background-repeat: no-repeat;background-size: auto 100%;">
        @if (! isset($name))
            Your Company
        @endif
    </div>
</a>
