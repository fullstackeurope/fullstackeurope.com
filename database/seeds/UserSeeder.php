<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Seeder;

final class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(['email' => 'dries@vints.io', 'name' => 'Dries Vints']);
        User::factory()->create(['email' => 'freek@vints.io', 'name' => 'Freek Van der Herten']);
        User::factory()->create(['email' => 'john@example.com']);
    }
}
