<div class="header fixed w-full text-white py-8 text-xl md:text-base md:py-6">
    <div class="container mx-auto">
        <div class="md:flex">
            <div class="md:w-1/4">
                <img src="/assets/images/logo.png" width="150" alt="Full Stack Europe">
                <span class="md:hidden">
                    <a id="show-nav" class="show-nav text-white text-2xl float-right mt-2" href="javascript:;">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a id="hide-nav" class="text-white text-2xl float-right mt-2 hidden" href="javascript:;">
                        <i class="far fa-times-circle"></i>
                    </a>
                </span>
            </div>
            <div id="navigation" class="md:w-3/4 mt-10 md:mt-0 hidden md:block md:text-right">
                <nav>
                    <ul class="list-reset">
                        <li class="mb-6 md:mb-0 md:mr-6 md:inline-block">
                            <a class="text-white" href="#">speakers</a>
                        </li>
                        <li class="mb-6 md:mb-0 md:mr-6 md:inline-block">
                            <a class="text-white" href="#">schedule</a>
                        </li>
                        <li class="mb-10 md:mb-0 md:mr-6 md:inline-block">
                            <a class="text-white" href="#">sponsors</a>
                        </li>
                        <li class="md:mr-4 md:inline-block">
                            <a class="btn-tickets inline-block w-full text-center text-white uppercase rounded-lg px-8 py-6 md:px-5 md:py-3"
                               href="{{ $page->ticketUrl }}">
                                tickets
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
