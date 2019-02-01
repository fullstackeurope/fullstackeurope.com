<div class="footer text-sm">
    <div class="footer-top leading-normal" style="background-color: #2D256F;">
        <div class="container pt-16 pb-8">
            <div class="md:flex md:mb-4">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <img src="/assets/images/logo.png" class="mb-4 md:mb-6" width="150" alt="Full Stack Europe"><br>
                    {{ $page->dates }} - {{ $page->venue }}
                </div>
                <div class="md:w-1/2 md:text-right">
                    <ul class="list-reset">
                        <li class="md:inline-block mb-4"><a href="#">speakers</a></li>
                        <li class="md:ml-6 md:inline-block mb-4"><a href="#">schedule</a></li>
                        <li class="md:ml-6 md:inline-block mb-4"><a href="#">workshops</a></li>
                        <li class="md:ml-6 md:inline-block mb-4"><a href="#">venue</a></li>
                        <li class="md:ml-6 md:inline-block mb-4"><a href="#">sponsors</a></li>
                        <li class="md:ml-6 md:inline-block mb-4"><a href="{{ $page->ticketUrl }}">tickets</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom leading-loose text-center" style="background-color: #20195B;">
        <div class="container py-8">
            <div class="md:flex md:mb-4">
                <div class="md:w-3/4 md:text-left">
                    &copy; Full Stack Europe
                    <span class="hidden md:inline-block">|</span>
                    <span class="md:hidden"><br></span>
                    Design by <a href="https://janvanechelpoel.be">Jan Van Echelpoel</a>
                </div>
                <div class="md:w-1/4 md:text-right text-lg">
                    <a href="mailto:hello@fullstackeurope.com" class="mr-3">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://twitter.com/fullstackeu" class="mr-3">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCUusSdBRcgftKaa9qp3KxZw">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
