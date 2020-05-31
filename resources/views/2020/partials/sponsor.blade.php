<a href="{{ $link ?? 'mailto:hello@fullstackeurope.com?subject=We want to sponsor!' }}" class="text-gray-800" target="_blank">
    <div class="{{ isset($bg) ? $bg : 'bg-white'}} p-4 {{ isset($large) ? 'md:h-32' : 'md:h-24'}} enlarge rounded text-2xl font-noway-medium text-center flex flex-col justify-center">
        @if (! isset($name))
            Your Company
        @else
            <img style="object-fit: contain;" class="max-w-full h-32 md:max-h-full" src="{{ asset("/images/2020/sponsors/{$image}.png") }}" alt="{{ $name }}">
        @endif
    </div>
</a>
