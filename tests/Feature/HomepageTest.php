<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Edition;
use App\Models\Speaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_the_homepage(): void
    {
        $edition = Edition::factory()->create([
            'year' => 2023,
            'sale_ends_description' => 'Blind birds available until',
        ]);

        Speaker::factory()->create(['edition_id' => $edition->id]);

        $this->get("/{$edition->year}")
            ->assertSee($edition->pageTitle())
            ->assertSee($edition->meta_description);
    }
}
