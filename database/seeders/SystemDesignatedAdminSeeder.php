<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
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
        $user = User::factory()->create([
            'name' => 'admin',
            'is_admin' => true,
            'email' => 'admin@larave.dev'
        ]);
        Post::factory(30)->create([
            'user_id' => $user->first()->id
        ]);
    }
}
