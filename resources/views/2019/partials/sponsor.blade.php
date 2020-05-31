<a href="{{ $sponsor->website }}" class="text-gray-800" target="_blank">
    <div class="bg-white p-4 md:h-{{ $large ? 40 : 24 }} enlarge rounded {{ $large ? 'text-2xl' : 'text-lg' }} font-noway-medium text-center flex flex-col justify-center">
        @if ($sponsor->logo)
            <img src="{{ $sponsor->logo() }}" alt="{{ $sponsor->name }}"
                 class="max-w-full h-32 object-contain md:max-h-full">
        @else
            {{ $sponsor->name }}
        @endif
    </div>
</a>
