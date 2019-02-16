<a href="https://twitter.com/{{ $twitter }}">
    <div class="speaker flex md:block shadow-lg rounded md:text-center">
        <div class="w-1/3 md:w-full overflow-hidden xl:h-64">
            <div style="height: inherit; transform: translateY(50%);">
                <img src="/assets/images/speaker.jpg" alt="{{ $name }}"
                     class="block" style="transform: translateY(-50%);">
                {{--<img src="/assets/images/speakers/{{ str_replace(' ', '', strtolower($name)) }}.jpg" alt="{{ $name }}"--}}
                    {{--class="block" style="transform: translateY(-50%);">--}}
            </div>
        </div>

        <div class="w-2/3 md:w-full py-4 px-6 flex flex-col justify-center">
            <h3 class="text-primary font-medium text-2xl">{{ $name }}</h3>
            <span class="text-lg">{{ '@'.$twitter }}</span>
        </div>
    </div>
</a>
