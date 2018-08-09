@component('layouts.app')
    <h3 class="text-3xl mb-16 leading-tight sm:w-3/5">
        In 2019, a new conference takes place in the city of Antwerp, Belgium.
    </h3>

    <p class="text-xl mb-4 leading-normal">
        Full Stack Europe will be a conference for <strong class="text-black">every kind of developer</strong>. We will
        offer talks for developers who want to learn across a wide variety of skills. For example, if you are...
    </p>

    <ul class="text-xl mb-4 leading-normal">
        <li><i class="fas fa-arrow-alt-circle-right text-grey-dark mx-2"></i> a back end developer and want to learn more devops</li>
        <li><i class="fas fa-arrow-alt-circle-right text-grey-dark mx-2"></i> a front end developer and want to improve your design skills</li>
        <li><i class="fas fa-arrow-alt-circle-right text-grey-dark mx-2"></i> an infrastructure engineer and want to improve your coding skills</li>
        <li><i class="fas fa-arrow-alt-circle-right text-grey-dark mx-2"></i> and so on...</li>
    </ul>

    <p class="text-xl mb-16 leading-normal">Read more in <a href="https://medium.com/p/f49422f14308">our announcement post</a>.</p>

    <p class="text-xl font-bold pb-8 leading-normal">
        Early subscribers will be the first to be able to buy tickets and know about new speakers. Sign up now!
    </p>

    <div class="bg-white rounded-sm mb-16">
        <form action="https://sendy.murze.be/subscribe" method="post" accept-charset="utf-8">
            <input type="email" id="email" name="email" placeholder="Your e-mail address" required="required"
                class="inline-block shadow-lg text-lg bg-transparent p-4 sm:h-16 pl-6 pr-6 w-full sm:w-3/4">
            <input type="hidden" name="list" value="{{ config('services.sendy.list_id') }}">

            <button type="submit" name="submit" id="submit"
                    class="btn-submit shadow-lg rounded-b sm:rounded-r-lg inline-block text-xl sm:h-16 text-center uppercase sm:float-right p-4 pl-6 pr-6 w-full sm:w-1/4">
                Sign Up
            </button>
        </form>
    </div>

    <h3 class="text-xl text-center mb-8">Organized by</h3>

    <div class="flex text-grey-dark mb-16">
        <div class="w-1/2 sm:w-1/4 sm:ml-auto text-center">
            <p class="mb-3">
                <a href="https://twitter.com/freekmurze">
                    <img src="/images/freek.jpg"
                        width="100" class="rounded-full inline-block">
                </a>
            </p>
            <p class="mb-3">Freek Van der Herten</p>
            <p class="tracking-xl-wide">
                <a href="https://twitter.com/freekmurze"><i class="fab fa-twitter"></i></a>
                <a href="http://murze.be"><i class="fas fa-globe-africa"></i></a>
            </p>
        </div>
        <div class="w-1/2 sm:w-1/4 sm:mr-auto text-center">
            <p class="mb-3">
                <a href="https://twitter.com/driesvints">
                    <img src="/images/dries.jpg"
                         width="100" class="rounded-full inline-block">
                </a>
            </p>
            <p class="mb-3">Dries Vints</p>
            <p class="tracking-xl-wide">
                <a href="https://twitter.com/driesvints"><i class="fab fa-twitter"></i></a>
                <a href="https://driesvints.com"><i class="fas fa-globe-africa"></i></a>
            </p>
        </div>
    </div>
@endcomponent
