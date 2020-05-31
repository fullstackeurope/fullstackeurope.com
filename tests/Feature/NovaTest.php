<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NovaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function nova_login_can_be_visited()
    {
        $this->get('/nova')->assertRedirect('/nova/login');
    }
}
