<a href="{{ $sponsor->website }}" class="text-gray-600" target="_blank">
    <div class="bg-white p-4 {{ $large ? 'md:h-40' : 'md:h-24' }} enlarge rounded {{ $large ? 'text-2xl' : 'text-lg' }} font-noway-medium text-center flex flex-col justify-center">
        @if ($sponsor->logo)
            <img src="{{ $sponsor->logoUrl() }}" alt="{{ $sponsor->name }}"
                 class="max-w-full h-32 object-contain md:max-h-full">
        @else
            {{ $sponsor->name }}
        @endif
    </div>
</a>
