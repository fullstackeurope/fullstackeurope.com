<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create(['email' => 'dries@vints.io']);
        factory(User::class)->create(['email' => 'freek@vints.io']);
    }
}
