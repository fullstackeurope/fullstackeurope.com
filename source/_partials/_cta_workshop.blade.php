<p class="text-center mt-8">
    @isset($speaker['soldOut'])
        <span class="btn-tickets mb-4 py-2 px-10">
            Sold out
        </span>
    @else
        <a class="btn-tickets mb-4 py-2 px-10" href="{{ $page->ticketsUrl }}" target="_blank">
            Register now
        </a>
    @endisset
</p>
