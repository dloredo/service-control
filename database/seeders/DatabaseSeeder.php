<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
        $this->call(RoleSeeder::class);
        
        User::create([
            'name' => "admin",
            'email' => "admin@mail.com",
            'email_verified_at' => now(),
            'age' => 20,
            'gender' => "Male",
            "role_id" => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => "XUNpkjO0rO",
        ]);
    }
}
