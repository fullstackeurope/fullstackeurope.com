<a href="{{ $link ?? 'mailto:hello@fullstackeurope.com?subject=We want to sponsor!' }}" class="text-grey-darker">
    <div class="bg-theme-grey-light p-4 {{ isset($large) ? '' : 'md:h-24'}} enlarge rounded text-2xl font-noway-medium text-center flex flex-col justify-center">
        @if (! isset($name))
            Your Company
        @else
            <img style="object-fit: contain;" class="max-w-full h-32 md:max-h-full" src="/assets/images/sponsors/{{ $image }}.png">
        @endif
    </div>
</a>
