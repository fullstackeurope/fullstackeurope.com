@if ($edition->publish_schedule)
    <div id="schedule" class="container mx-auto px-4 bg-white pt-10 md:pt-20 pb-12 sm:px-20">
        <h3 class="pre-title">Timetable</h3>
        <h2 class="title">Conference Schedule<span class="hidden sm:inline"> -</span> Spilberg Stage</h2>

        <div id="schedule-navigation" class="m-auto flex text-center text-xl font-semibold max-w-xs mb-12">
            @foreach ($schedule as $timeslots)
                <a id="schedule-nav-day-{{ $loop->iteration }}" href="javascript:;"
                   class="inline-block border border-gray-200 flex-1 p-6 {{ $loop->first ? 'rounded-l-lg primary-gradient' : 'border-t border-r border-b' }} {{ $loop->last ? 'rounded-r-lg' : '' }}">
                    {{ strtoupper($timeslots->first()->starts_at->format('M j')) }}
                </a>
            @endforeach
        </div>

        <div>
            @foreach ($schedule as $timeslots)
                <div id="schedule-day-{{ $loop->iteration }}" {!! $loop->first ? '' : 'class="hidden"' !!}>
                    @foreach ($timeslots as $timeslot)
                        @include('2019.partials.timeslot', compact('timeslot'))
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endif
