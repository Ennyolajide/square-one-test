<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create designated, system-created user, 'admin'
        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'is_admin' => true,
            'email' => 'admin@larave.dev'
        ] );
        //\App\Models\Post::factory(100)->create();
    }
}
