<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Edition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_the_homepage()
    {
        $edition = factory(Edition::class)->create(['year' => 2020]);

        $this->get("/{$edition->year}")
            ->assertSee($edition->pageTitle())
            ->assertSee($edition->meta_description);
    }
}
