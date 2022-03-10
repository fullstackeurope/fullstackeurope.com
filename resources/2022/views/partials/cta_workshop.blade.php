<p class="text-center mt-8">
    @if ($workshop->sold_out)
        <span class="btn-tickets mb-4 py-2 px-10">
            Sold out
        </span>
    @elseif ($edition->tickets_url)
        <a class="btn-tickets mb-4 py-2 px-10" href="{{ $edition->tickets_url }}" target="_blank">
            Register now
        </a>
    @endif
</p>
