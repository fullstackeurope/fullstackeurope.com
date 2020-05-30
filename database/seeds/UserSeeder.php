<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create(['email' => 'dries@vints.io', 'name' => 'Dries Vints']);
        factory(User::class)->create(['email' => 'freek@vints.io', 'name' => 'Freek Van der Herten']);
        factory(User::class)->create(['email' => 'john@example.com']);
    }
}
