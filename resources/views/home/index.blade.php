@component('layouts.app')
    <h3 class="text-3xl mb-16 leading-tight">
        In <span class="font-bold font-blue" style="color: #695CEA;">2019</span>, a new conference takes<br>place in the city of Antwerp, Belgium.
    </h3>

    <p class="text-xl mb-4 leading-normal">
        This conference is for you if you're interested in:
    </p>

    <ul class="text-xl mb-16 leading-normal">
        <li><span class="list-item">-</span> Hearing top quality talks</li>
        <li><span class="list-item">-</span> Leveling up your skills across multiple disciplines</li>
        <li><span class="list-item">-</span> Expanding your boundaries as a programmer</li>
    </ul>

    <p class="text-xl font-bold pb-8 leading-normal">
        Early subscribers will be the first to be able to buy tickets and know about new speakers. Sign up now!
    </p>

    <div class="bg-white rounded-sm mb-16">
        <form action="https://sendy.murze.be/subscribe" method="post" accept-charset="utf-8">
            <input type="email" id="email" name="email" placeholder="Your e-mail address" required="required"
                class="inline-block shadow-lg text-lg bg-transparent p-4 h-16 pl-6 pr-6 w-3/4">
            <input type="hidden" name="list" value="{{ config('services.sendy.list_id') }}">

            <button type="submit" name="submit" id="submit"
                    class="btn-submit shadow-lg rounded-lg inline-block text-xl h-16 text-center uppercase float-right p-4 pl-6 pr-6 w-1/4">
                Sign Up
            </button>
        </form>
    </div>
@endcomponent
