<div id="speakers" class="bg-white mb-12 md:mb-0">
    <div class="container mx-auto bg-white md:px-0">
        <div id="speakers-inner" class="bg-white pt-10 md:pt-20 -mt-20">
            <h3 class="pre-title">Meet our speakers</h3>
            <h2 class="title">Featuring talks from</h2>
            <div class="md:flex mb-12 md:px-4 lg:px-8 xl:px-10">
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-0">
                    @include('_partials._speaker', [
                        'name' => 'Konstantin Kudryashov',
                        'image' => 'everzet.png',
                        'twitter' => 'everzet',
                        'bio' => 'eXtreme Programmer',
                    ])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10 mb-6 md:mb-0">
                    @include('_partials._speaker', [
                        'name' => 'Sara Soueidan',
                        'image' => 'sara.jpg',
                        'twitter' => 'sarasoueidan',
                        'bio' => 'Front-End UI/UX Developer',
                    ])
                </div>
                <div class="md:w-1/3 md:px-4 lg:px-8 xl:px-10">
                    @include('_partials._speaker', [
                        'name' => 'Mattias Geniar',
                        'image' => 'mattias.jpg',
                        'twitter' => 'mattiasgeniar',
                        'bio' => 'Problem Solver at Nucleus',
                    ])
                </div>
            </div>
            <div class="title-sm">More coming soon...</div>
        </div>
    </div>
</div>
