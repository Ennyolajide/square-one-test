<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemDesignatedAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
