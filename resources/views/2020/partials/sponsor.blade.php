<a href="{{ $sponsor->website }}" class="text-gray-600" target="_blank">
    <div class="bg-white p-4 md:h-{{ isset($large) ? 32 : 24 }} enlarge rounded text-2xl font-noway-medium text-center flex flex-col justify-center">
        @if ($sponsor->logo)
            <img src="{{ $sponsor->logo() }}" alt="{{ $sponsor->name }}"
                 class="max-w-full h-32 object-contain md:max-h-full">
        @else
            {{ $sponsor->name }}
        @endif
    </div>
</a>
