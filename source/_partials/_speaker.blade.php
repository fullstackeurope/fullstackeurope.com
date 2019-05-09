<div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-12">
    <a href="/speakers/{{ $speaker['url'] }}">
        <div class="speaker enlarge flex md:block shadow-lg-blue rounded text-left md:text-center">
            <div class="w-1/3 md:w-full overflow-hidden xl:h-64">
                <div style="height: inherit; transform: translateY(50%);">
                    <img src="/assets/images/speakers/{{ $speaker['url'] }}.jpg" alt="{{ $speaker['name'] }}"
                         class="block w-full" style="transform: translateY(-50%);">
                </div>
            </div>
            <div class="w-2/3 md:w-full pt-4 pb-6 px-6 flex flex-col justify-center">
                <h3 class="font-noway-medium md:leading-normal text-primary text-xl">
                    {{ $speaker['name'] }}
                </h3>
                <span class="leading-normal text-grey-darker text-left md:text-center" style="font-size: .95rem;">
                    {{ $speaker['bio'] }}
                </span>
            </div>
        </div>
    </a>
</div>
