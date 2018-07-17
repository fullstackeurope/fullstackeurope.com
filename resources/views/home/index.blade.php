@component('layouts.app')
    <div class="flex-1 self-start"></div>
    <div class="flex-1 text-center max-w-sm p-4">
        <div>
            <h1 class="text-5xl italic font-bold inline-block bg-red-light text-grey-lightest p-2 pr-8 pl-8">Full Stack</h1><br>
            <h2 class="text-3xl italic inline-block bg-white -mt-2 p-2 pr-8 pl-8 mb-4">Europe</h2>
        </div>

        <div class="text-xl text-grey-darkest leading-tight">
            <p class="rounded shadow-md p-4 mb-2 bg-white mb-4">
                In 2019, a new conference takes place in the city of Antwerp, Belgium.
            </p>
            <p class="rounded shadow-md p-4 mb-2 bg-white mb-4">
                Are you interested in hearing top quality talks, leveling up your skills across multiple disciplines and
                expanding your boundaries as a programmer? Then this conference is for you.
            </p>
            <p class="rounded shadow-md p-4 mb-2 bg-white mb-4">
                Early subscribers will be the first to be able to buy tickets and know about new speakers
            </p>
        </div>

        <form action="https://sendy.murze.be/subscribe" method="post" accept-charset="utf-8">
            <div class="mb-4">
                <input type="email" id="email" name="email" placeholder="Your e-mail address" required="required"
                    class="text-lg bg-grey-lighter rounded shadow-md p-4 w-full hover:bg-white">
                <input type="hidden" name="list" value="{{ config('services.sendy.list_id') }}">
            </div>

            <div>
                <button type="submit" name="submit" id="submit"
                        class="text-xl text-white rounded shadow-md p-4 w-full bg-blue-dark hover:bg-blue-light">
                    Subscribe
                </button>
            </div>
        </form>
    </div>
    <div class="flex-1 self-end"></div>
@endcomponent
