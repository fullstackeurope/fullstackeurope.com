<a href="{{ $link ?? 'mailto:hello@fullstackeurope.com?subject=We want to sponsor!' }}" class="text-grey-darker">
    <div class="bg-grey-light w-full h-32 {{ isset($large) ? '' : 'md:h-24'}} enlarge rounded text-2xl font-noway-medium text-center flex flex-col justify-center" style="background-color: #E9EDF6;">
        {{ $name ?? 'Your Company' }}
    </div>
</a>
