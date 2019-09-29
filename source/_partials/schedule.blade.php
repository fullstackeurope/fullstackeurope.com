<div id="schedule" class="container bg-white pt-10 md:pt-20 pb-12 sm:px-20">
    <h3 class="pre-title">Timetable</h3>
    <h2 class="title">Conference Schedule</h2>

    <div id="schedule-navigation" class="m-auto flex text-center text-xl font-semibold max-w-xs mb-12">
        <a id="schedule-nav-day-1" class="inline-block border border-grey-light rounded-l-lg primary-gradient flex-1 p-6 text-primary" href="javascript:;">OCT 24</a>
        <a id="schedule-nav-day-2" class="inline-block border border-t border-r border-b border-grey-light rounded-r-lg flex-1 p-6 text-primary" href="javascript:;">OCT 25</a>
    </div>

    <div>
        <div id="schedule-day-1">
            @include('_partials._timeslot', ['time' => '08:30', 'title' => 'Registrations', 'description' => 'Coffee & Snacks'])
            @include('_partials._timeslot', ['time' => '09:30', 'title' => 'Opening'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['caleb-porzio']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['susanna-wong']])
            @include('_partials._timeslot', ['time' => '10:45', 'title' => 'Break', 'description' => 'Coffee & Snacks'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['gabi-davila']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['matthias-noback']])
            @include('_partials._timeslot', ['time' => '12:30', 'title' => 'Lunch'])
            @include('_partials._timeslot', ['time' => '14:00', 'title' => 'Lightning Talks'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['thijs-feryn']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['tim-neutkens']])
            @include('_partials._timeslot', ['time' => '15:30', 'title' => 'Break', 'description' => 'Coffee & Snacks'])
            @include('_partials._timeslot', ['time' => '16:00', 'title' => 'Lightning Talks'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['indu-alagarsamy']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['konstantin-kudryashov']])
            @include('_partials._timeslot', ['time' => '17:45', 'title' => 'Closing'])
        </div>
        <div id="schedule-day-2" class="hidden">
            @include('_partials._timeslot', ['time' => '08:30', 'title' => 'Registrations', 'description' => 'Coffee & Snacks'])
            @include('_partials._timeslot', ['time' => '09:30', 'title' => 'Opening'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['sara-soueidan']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['mathias-verraes']])
            @include('_partials._timeslot', ['time' => '10:45', 'title' => 'Break', 'description' => 'Coffee & Snacks'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['mattias-geniar']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['joost-lubach']])
            @include('_partials._timeslot', ['time' => '12:30', 'title' => 'Lunch'])
            @include('_partials._timeslot', ['time' => '14:00', 'title' => 'Lightning Talks'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['rik-van-bruggen']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['nataliya-remez']])
            @include('_partials._timeslot', ['time' => '15:30', 'title' => 'Break', 'description' => 'Coffee & Snacks'])
            @include('_partials._timeslot', ['time' => '16:00', 'title' => 'Lightning Talks'])
            @include('_partials._timeslot', ['speaker' => $page->speakers['kadi-kraman']])
            @include('_partials._timeslot', ['speaker' => $page->speakers['jeremy-keith']])
            @include('_partials._timeslot', ['time' => '17:45', 'title' => 'Closing'])
        </div>
    </div>
</div>
