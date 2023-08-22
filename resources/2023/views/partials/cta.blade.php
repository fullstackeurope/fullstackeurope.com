@if ($edition->tickets_url)
    <div class="mt-8 bg-gray-50 sm:mt-12 lg:mt-16">
        <div class="relative text-left">
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-md mx-auto space-y-4 lg:max-w-5xl lg:grid lg:grid-cols-2 lg:gap-5 lg:space-y-0">
                    <div class="bg-white flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="px-6 py-8 bg-white text-primary sm:p-10 sm:pb-6">
                            <div>
                                <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600">Out of pocket discount</h3>
                            </div>
                            <div class="mt-4 flex items-baseline text-5xl lg:text-6xl font-extrabold">
                                &euro;580
                                <span class="ml-1 text-base lg:text-2xl font-medium text-gray-500"> / regular price </span>
                            </div>
                            {{--<p class="lg:-mt-4 text-xl text-gray-500 line-through">€670 last minute price</p>--}}
                            <p class="mt-3 text-gray-500">EX. VAT @21%</p>
                        </div>
                        <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                            <ul role="list" class="space-y-4">
                                @foreach ([
                                    //'Blind bird: €380 until March 15',
                                    //'Early bird: €480 until May 15',
                                    //'Regular: €580 until Sept 26',
                                    //'Last minute: €680 until the end',
                                ] as $price)
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">{{ $price }}</p>
                                </li>
                                @endforeach
                            </ul>
                            <div>
                                <div class="rounded-md shadow">
                                    <a href="{{ $edition->tickets_url }}" class="btn-tickets w-full"> Buy tickets </a>
                                </div>
                                <p class="mt-2 text-xs text-gray-600 text-center w-full">When you don't need a VAT invoice</p>
                            </div>

                        </div>
                    </div>

                    <div class="bg-white flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="px-6 py-8 bg-white text-primary sm:p-10 sm:pb-6">
                            <div>
                                <h3 class="inline-flex px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600" id="tier-standard">Company</h3>
                            </div>
                            <div class="mt-4 flex items-baseline text-5xl lg:text-6xl font-extrabold">
                                &euro;720
                                <span class="ml-1 text-base lg:text-2xl font-medium text-gray-500"> / regular price </span>
                            </div>
                            {{--<p class="lg:-mt-4 text-xl text-gray-500 line-through">€810 last minute price</p>--}}
                            <p class="mt-3 text-gray-500">EX. VAT @21%</p>
                        </div>
                        <div class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6">
                            <ul role="list" class="space-y-4">
                                @foreach ([
                                    //'Blind bird: €490 until March 15',
                                    //'Early bird: €590 until May 15',
                                    //'Regular: €720 until Sept 26',
                                    //'Last minute: €830 until the end',
                                ] as $price)
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ $price }}</p>
                                    </li>
                                @endforeach
                            </ul>
                            <div>
                                <div class="rounded-md shadow">
                                    <a href="{{ $edition->tickets_url }}" class="btn-tickets w-full"> Buy tickets </a>
                                </div>
                                <p class="mt-2 text-xs text-gray-600 text-center w-full">When you need a VAT invoice</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($edition->sale_ends_at)
            <p class="relative font-noway-medium italic text-primary text-1xl mt-8 leading-normal max-w-xs mx-auto">
                <span class="timer" data-expires="{{ $edition->sale_ends_at->getTimestamp() }}" data-threshold-days="30">
                    {{ $edition->sale_ends_description }}<br>
                    <span class="days">0</span>d,
                    <span class="hours">0</span>h,
                    <span class="minutes">0</span>m,
                    <span class="seconds">0</span>s
                </span>
            </p>
        @endif
    </div>

@endif
